<?php
/**
 * Created by PhpStorm.
 * User: yangmingzhao
 * Date: 2018/9/8
 * Time: 下午7:29
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    //首页
    public function index()
    {
        return view('video.index');
    }
    //视频列表
    public function video()
    {
        return view('video.video');
    }
    //视频花絮
    public function feature()
    {
        return view('video.feature');
    }
    //花絮播放页
    public function fplay()
    {
        return view('video.play');
    }
    //完整视频播放页
    public function vplay()
    {
        return view('video.play');
    }
}