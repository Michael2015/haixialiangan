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
<header>
    <div class="nav_main clearfix w">
        <a href="{{URL::to('/')}}"  title="海峡两岸">
            <img src="{{URL::asset('images/logo.png')}}" class="logo" height="38px" alt="海峡两岸">
        </a>
        <a href="{{URL::to('/')}}" class="menu current">海峡两岸</a>
        <a href="{{URL::to('/video')}}" class="menu">海峡两岸完整视频</a>
        <a href="{{URL::to('/feature')}}" class="menu">海峡两岸视频花絮</a>
        <span class="icon_hot"></span>
    </div>
</header>
<div class="main w">
