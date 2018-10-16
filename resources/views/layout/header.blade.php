<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$title}}</title>
    <meta name="keywords" content="{{$keyword}}"/>
    <meta name="description" content="{{$description}}"/>
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css"/>
</head>
<body>
<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https'){
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
        }
        else{
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<header>
    <div class="nav_main clearfix w">
        <a href="{{URL::to('/')}}"  title="海峡两岸">
            <img src="{{URL::asset('images/logo.png')}}" class="logo" height="38px" alt="海峡两岸">
        </a>
        <a href="{{URL::to('/')}}" class="menu current">海峡两岸</a>
        <a href="{{URL::to('/video')}}" class="menu">海峡两岸完整视频</a>
        <a href="{{URL::to('/feature')}}" class="menu">海峡两岸视频花絮</a>
        <span class="icon_hot"></span>
        <a href="{{URL::to('/sitemap.html')}}" title="网站导航" style="float: right">网站导航</a>
    </div>
</header>
<div class="main w">
