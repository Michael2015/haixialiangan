@extends('layout.app')
@section('content')
    <div class="video-list">
        <label>往期《海峡两岸》直播全部视频</label>
        <ul>
            @foreach ($video_list as $video)
                <li>
                    <a href="/video/{{$video->guid}}.html"><img
                                src="https://img.haixialiangan.wang?img_url={{substr($video->video_key_frame_url,25)}}"
                                alt="{{$video->video_title}}"></a>
                    <a title="{{$video->video_title}}" href="/cctv/49233.html">{{$video->video_title}}</a>
                </li>
            @endforeach
            <div class="clear"></div>
        </ul>
        <div class="page">
            {{ $video_list->links() }}
        </div>
    </div>
@endsection

