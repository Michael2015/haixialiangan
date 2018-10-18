<?php
/**
 * Created by PhpStorm.
 * User: yangmingzhao
 * Date: 2018/9/8
 * Time: 下午7:29
 */

namespace App\Http\Controllers;

use App\Model\Feature;
use App\Model\Video;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class VideoController extends Controller
{
    private $isMobile;
    public function __construct()
    {
        $route = Route::currentRouteAction();
        $route = strstr($route,'@');
        $current_action_name = substr($route,1);
        View::share('current_action_name',$current_action_name);
        $this->isMobile = isMobile();
    }
    /**
     * Show the profile for the given user.
     *
     * @param  int $id
     * @return Response
     */
    //首页
    public function index()
    {
        //获取完整视频
        $index_video = Video::orderBy('video_focus_date', 'desc')->take(60)->get();
        $index_video = json_decode($index_video, true);
        //获取子视频
        $feature_video = [];
        if ($index_video) {
            $feature_video = Feature::where('date', '=', $index_video[0]['date'])->take(6)->get();
            $feature_video = json_decode($feature_video, true);
        }

        //首页最新视频模块
        $index_1_module_video = array_slice($index_video, 0, 15);
        $index_2_module_video = array_slice($index_video, 15, 15);
        $index_3_module_video = array_slice($index_video, 30, 15);
        $index_4_module_video = array_slice($index_video, 45, 15);


        $title = '央视海峡两岸_海峡两岸视频正在直播中';
        $keywords = '海峡两岸,海峡两岸直播,海峡两岸视频,海峡两岸新闻';
        $description = '海峡两岸直播网每天晚上20:30同步直播中央电视台综合频道，CCTV4频道的《海峡两岸》；在直播结束后，海峡两岸重播视频以及往期视频都会同步更新，让关心海峡两岸的民众更早观看海峡两岸新闻。';
        return view('video.index', [
            'title' => $title,
            'keyword' => $keywords,
            'description' => $description,
            'newest_video' => $index_video[0],
            'feature_video' => $feature_video,
            'index_1_module_video' => $index_1_module_video,
            'index_2_module_video' => $index_2_module_video,
            'index_3_module_video' => $index_3_module_video,
            'index_4_module_video' => $index_4_module_video,
        ])->with('isMobile',$this->isMobile);
    }

    //视频列表
    public function video()
    {
        $title = '央视海峡两岸直播视频列表';
        $keywords = '海峡两岸,海峡两岸直播';
        $description = '海峡两岸直播视频历史回放合集';

        $video_list = Video::orderBy('video_focus_date', 'desc')->paginate(36);

        return view('video.video', [
            'title' => $title,
            'keyword' => $keywords,
            'description' => $description,
            'video_list' => $video_list,
        ])->with('isMobile',$this->isMobile);
    }

    //视频花絮
    public function feature()
    {
        $title = '央视海峡两岸直播视频片段列表';
        $keywords = '海峡两岸,海峡两岸直播,海峡两岸直播视频片段';
        $description = '海峡两岸直播视频历史回放片段合集';

        $feature_list = Feature::orderBy('date', 'desc')->groupBy('date')->paginate(7);

        $feature_data = [];
        foreach ($feature_list as $date) {
            $feature_data[$date->date] = Feature::orderBy('date', 'desc')->where('date', '=', $date->date)->get();

        }
        return view('video.feature', [
            'title' => $title,
            'keyword' => $keywords,
            'description' => $description,
            'feature_list' => $feature_list,
            'feature_data' => $feature_data,
        ])->with('isMobile',$this->isMobile);
    }

    //花絮播放页
    public function fplay($date, $guid = null)
    {

        $video_content = Feature::where('guid', '=', $guid)->take(1)->get();
        $video_content = json_decode($video_content,true);
        if ($video_content) {
            $title = $video_content[0]['video_title'] . '_直播视频花絮';
            $keywords = $video_content[0]['keyword'];
            $description = $video_content[0]['content'];
            //关联视频
            $ass_video = Feature::where('date', '=', $video_content[0]['date'])->where('guid', '<>', $guid)->take(10)->get();
            $ass_video = json_decode($ass_video, true);
            array_walk($ass_video, function (&$v) {
                $v['url'] = '/feature/'.$v['date'].'/'. $v['guid'] . '.html';
            });

        } else {
            die('非法访问');
        }
        return view('video.play', [
            'title' => $title,
            'keyword' => $keywords,
            'description' => $description,
            'video_content' => $video_content,
            'ass_video' => $ass_video,
        ])->with('isMobile',$this->isMobile);
    }

    //完整视频播放页
    public function vplay($guid = null)
    {
        $video_content = Video::where('guid', '=', $guid)->take(1)->get();
        $video_content = json_decode($video_content,true);
        if ($video_content) {
            $title = $video_content[0]['video_title'] . '_完整直播视频';
            $keywords = $video_content[0]['keyword'];
            $description = $video_content[0]['content'];
            //关联视频
            $ass_video = Video::orderBy('video_focus_date', 'desc')->where('guid', '<>', $guid)->take(10)->get();
            $ass_video = json_decode($ass_video, true);
            array_walk($ass_video, function (&$v) {
                $v['url'] = '/video/' . $v['guid'] . '.html';
            });

        } else {
            die('非法访问');
        }

        return view('video.play', [
            'title' => $title,
            'keyword' => $keywords,
            'description' => $description,
            'video_content' => $video_content,
            'ass_video' => $ass_video,
        ])->with('isMobile',$this->isMobile);
    }
}