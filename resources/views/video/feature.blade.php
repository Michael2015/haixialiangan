@extends('layout.app')
@section('content')
    <div class="ft-ll">
        @foreach ($feature_data as $key=>$feature)
        <label>{{$key}}期《海峡两岸》直播视频花絮</label>
        <div class="video-list">
            <ul>
                @foreach ($feature as $f)
                <li>
                    <a href="/feature/{{$f->date}}/{{$f->guid}}.html"><img
                                src="http://img.haixialiangan.wang?img_url={{substr($f->video_key_frame_url,25)}}"
                                alt="{{$f->video_title}}"></a>
                    <a title="{{$f->video_title}}" href="/feature/{{$f->date}}/{{$f->guid}}.html">{{$f->video_title}}</a>
                </li>
                @endforeach
                <div class="clear"></div>
            </ul>
        </div>
        @endforeach
        <div class="page">
            {{$feature_list->links()}}
        </div>
    </div>
@endsection

