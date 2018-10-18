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
class RssController extends Controller
{

    //网站地图
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response|\think\Response
     */
    public function index()
    {
        $feature_video = Feature::where([])->get(['date','guid','video_title']);
        $video_video = Video::where([])->get(['date','guid','video_title']);
        $xml  = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= "\n";
        $xml .= '<urlset xmlns="http://haixialiangan.wang/rss.xml">';
        $xml .= "\n";
        foreach ($feature_video as $feature)
        {
            $xml .= "<url>\n";
            $xml .= "<loc>http://haixialiangan.wang/feature/{$feature['date']}/{$feature['guid']}.html</loc>\n";
            $xml .= "<lastmod>".date('Y-m-d')."</lastmod>\n";
            $xml .= "<changefreq>daily</changefreq>\n";
            $xml .= "</url>\n";
        }
        foreach ($video_video as $video)
        {
            $xml .= "<url>\n";
            $xml .= "<loc>http://haixialiangan.wang/video/{$video['guid']}.html</loc>\n";
            $xml .= "<lastmod>".date('Y-m-d')."</lastmod>\n";
            $xml .= "<changefreq>daily</changefreq>\n";
            $xml .= "</url>\n";
        }
        $xml .= '</urlset>';
        return response($xml,200,["Content-type"=>"text/xml"]);
    }
}