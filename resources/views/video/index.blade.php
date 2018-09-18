@extends('layout.app')
@section('content')
    <label>
        <h2>【最新】{{$newest_video['video_title']}}直播视频</h2>
    </label>
    <section>
        <iframe class="ldgplayer" height="470" width="782" frameborder="0" border="0" marginwidth="0" marginheight="0"
                scrolling="no" src="http://video.haixialiangan.wang?pid={{$newest_video['guid']}}" width="100%"
                height="800"></iframe>
    </section>
    <aside>
        <ul>
            @foreach ($feature_video as $feature)
                <li>
                    <a href="/feature/{{$feature['date']}}/{{$feature['guid']}}.html"><img
                                src="http://img.haixialiangan.wang?img_url={{substr($feature['video_key_frame_url'],25)}}"
                                alt="{{$feature['video_title']}}"></a>
                    <div>
                        <h3><a href="/feature/{{$feature['date']}}/{{$feature['guid']}}.html"><b>{{$feature['date']}}
                                    期片段</b>&nbsp;{{$feature['video_title']}}</a></h3>
                    </div>
                </li>
            @endforeach
        </ul>
    </aside>
    <article>
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="/video" class="more">更多视频&nbsp;<span
                                class="more-sign">&gt;</span></a>
                    <strong>最新视频 <span class="name-en">/New</span></strong>
                </dt>
                @foreach ($index_1_module_video as $index_1)
                <dd class="sidebar_articles">
                    <span>{{date('m-d',strtotime($index_1['date']))}}</span>
                    <a target="_blank" href="/video/{{$index_1['guid']}}.html">{{$index_1['video_title']}}</a>
                </dd>
                @endforeach
            </dl>
        </div>

        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="/video" class="more">更多视频&nbsp;<span
                                class="more-sign">&gt;</span></a>
                    <strong>最新视频 <span class="name-en">/New</span></strong>
                </dt>
                @foreach ($index_2_module_video as $index_1)
                    <dd class="sidebar_articles">
                        <span>{{date('m-d',strtotime($index_1['date']))}}</span>
                        <a target="_blank" href="/video/{{$index_1['guid']}}.html">{{$index_1['video_title']}}</a>
                    </dd>
                @endforeach
            </dl>
        </div>
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="/video" class="more">更多视频&nbsp;<span
                                class="more-sign">&gt;</span></a>
                    <strong>最新视频 <span class="name-en">/New</span></strong>
                </dt>
                @foreach ($index_3_module_video as $index_1)
                    <dd class="sidebar_articles">
                        <span>{{date('m-d',strtotime($index_1['date']))}}</span>
                        <a target="_blank" href="/video/{{$index_1['guid']}}.html">{{$index_1['video_title']}}</a>
                    </dd>
                @endforeach
            </dl>
        </div>
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="/video" class="more">更多视频&nbsp;<span
                                class="more-sign">&gt;</span></a>
                    <strong>最新视频 <span class="name-en">/New</span></strong>
                </dt>
                @foreach ($index_4_module_video as $index_1)
                    <dd class="sidebar_articles">
                        <span>{{date('m-d',strtotime($index_1['date']))}}</span>
                        <a target="_blank" href="/video/{{$index_1['guid']}}.html">{{$index_1['video_title']}}</a>
                    </dd>
                @endforeach
            </dl>
        </div>
    </article>
@endsection

