<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Video extends Eloquent
{
    protected $primaryKey = '_id';
    protected $connection = 'mongodb';
    protected $collection = 'full_video';     //文档名 
    static $full_video_url = "http://api.cntv.cn/video/getVideoListByTopicIdInfo?videoid=##&topicid=TOPC1451540328102649&serviceId=tvcctv&type=0&t=jsonp&cb=setItem0=";

    //插入视频

    public static function addVideo()
    {
        $get_video_url = str_replace('##', self::getLastVideoId(), self::$full_video_url);
        $output = self::curl($get_video_url);
        if ($output) {
            $output = str_replace(['setItem0=', '(', ');', '?p=2&h=120'], '', $output);
            $output = json_decode($output, true);
            $output = array_slice($output['data'], 0, 2);
        }
        self::buildData($output);
    }


    //插入完整视频
    public static function buildData($row)
    {
        if (is_array($row)) {
            foreach ($row as $value) {
                $obj = new self();
                $obj->video_id = $value['video_id'];
                $obj->video_key_frame_url = $value['video_key_frame_url'];
                $obj->video_focus_date = $value['video_focus_date'];
                $obj->video_length = $value['video_length'];
                $obj->date = date("Y-m-d", strtotime($value['video_focus_date']));
                $obj->video_title = $obj->date . '期 《海峡两岸》';
                $obj->guid = $value['guid'];
                $video_detail = self::getVideoContentByUrl($value['video_url']);
                $obj->keyword = $video_detail[0];
                $obj->content = $video_detail[1];
                $result = self::where('date', '=', $obj->date)->get();
                if (empty(json_decode($result, true))) {
                    $obj->save();
                }
            }
        }
    }

    //获取内容简介
    public static function getVideoContentByUrl($url)
    {
        $return = self::curl($url);
        $res = htmlspecialchars_decode($return);
        preg_match_all('#<meta\s+name=keywords\s+content="(.*?)">#', $res, $keywords);
        preg_match_all('#<meta\s+name=description\s+content="(.*?)">#', $res, $descriptions);
        preg_match_all('#视频简介：</em>(.*?)</p>#s', $res, $content);
        return [$keywords[1][0], trim(str_replace('本期节目主要内容：', '', $content[1][0]))];
    }

    //获取最新一个视频id
    public static function getLastVideoId()
    {
        $video_id = 'VIDE9IsmRBUAuQeuRFUQP7fg180917';
        $result = self::where('date', '=', date("Y-m-d"))->take(1)->get();
        $result = json_decode($result, true);
        if ($result) {
            $video_id = isset($result[0]['video_id']) ? $result[0]['video_id'] : $video_id;
        }
        return $video_id;
    }

    //do curl
    public static function curl($url)
    {

        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        // 4. 释放curl句柄
        curl_close($ch);
        return $output;
    }


}