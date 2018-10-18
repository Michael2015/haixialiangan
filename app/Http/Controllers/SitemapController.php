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

class SitemapController extends Controller
{
    //网站地图
    public function index()
    {
        $feature_video = Feature::where([])->get(['date','guid','video_title']);
        $video_video = Video::where([])->get(['date','guid','video_title']);
        return view('sitemap.index', ['feature'=>$feature_video,'video'=>$video_video]);
    }
}