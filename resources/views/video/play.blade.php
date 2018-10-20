@extends('layout.app')
@section('content')
    <div class="dt-content">
        <label>
            <h2><a href="{{URL::current()}}">{{$video_content[0]['video_title']}}</a></h2>
            <div class="bdsharebuttonbox">
                <a href="#" class="bds_more" data-cmd="more"></a>
                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                <a href="#" class="bds_tieba" data-cmd="tieba" title="分享到百度贴吧"></a>
                <a href="#" class="bds_bdhome" data-cmd="bdhome" title="分享到百度首页"></a>
            </div>
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
                            <img src="http://img.haixialiangan.wang?img_url={{substr($video['video_key_frame_url'],25)}}"
                                 alt="{{$video['video_title']}}">
                        </a>
                        <p>{{$video['video_title']}}</p>
                        <span class="my_video_length video_length video_play" title="视频时长">{{$video['video_length']}}</span>
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
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":["mshare","qzone","tsina","bdysc","weixin","bdxc","tqf","tieba","bdhome","sqq","ibaidu","huaban","duitang","twi","h163","copy"],"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
@endsection

