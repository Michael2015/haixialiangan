@extends('layout.app')
@section('content')
    <label>
        <h2>【最新】{{$newest_video['video_title']}}直播视频</h2>
        <div class="bdsharebuttonbox">
            <a href="#" class="bds_more" data-cmd="more"></a>
            <a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
            <a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
        </div>
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
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":["mshare","weixin","tsina","tieba","bdhome","qzone","douban","sqq","thx","ibaidu","meilishuo","mogujie","diandian","huaban","duitang","hx","fx","youdao","sdo","qingbiji","people","xinhua","mail","isohu","yaolan","wealink","ty","iguba","fbook","twi","linkedin","h163","evernotecn","copy","print"],"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='c='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Dat Date()/36e5)];</script>
@endsection

