@extends('layout.app')
@section('content')
    <div class="video-list">
        <label>往期《海峡两岸》直播全部视频</label>
        <ul>
            @foreach ($video_list as $video)
                <li>
                    <a href="/video/{{$video->guid}}.html"><img
                                src="http://img.haixialiangan.wang?img_url={{substr($video->video_key_frame_url,25)}}"
                                alt="{{$video->video_title}}"></a>
                    <a title="{{$video->video_title}}" href="/video/{{$video->guid}}.html">{{$video->video_title}}</a>
                    <span class="my_video_length video_length m-video-length" title="视频时长">{{$video->video_length}}</span>
                </li>
            @endforeach
            <div class="clear"></div>
        </ul>
        <div class="page">
            {{ $video_list->links() }}
        </div>
    </div>
@endsection

