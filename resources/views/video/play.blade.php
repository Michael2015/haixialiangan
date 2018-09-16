@extends('layout.app')
@section('content')
    <div class="dt-content">
        <label>
            <h2>{{$video_content[0]['video_title']}}</h2>
        </label>
        <section>
            <iframe class="ldgplayer" height="560" width="1100" frameborder="0" border="0" marginwidth="0"
                    marginheight="0"
                    scrolling="no" src="http://video.haixialiangan.wang?pid={{$video_content[0]['guid']}}" width="100%"
                    height="800"></iframe>
        </section>
        <div class="dt-rt">
            <label>相关海峡两岸视频</label>
            <ul>
                @foreach ($ass_video as $video)
                    <li>
                        <a href="{{$video['url']}}">
                            <img src="https://img.haixialiangan.wang?img_url={{substr($video['video_key_frame_url'],25)}}"
                                 alt="{{$video['video_title']}}">
                        </a>
                        <p>{{$video['video_title']}}</p>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="dt-detail">
            <label>本期视频内容简介</label>
            <div class="dt-detail-ct">
                {{$video_content[0]['content']}}
            </div>
        </div>
    </div>
@endsection

