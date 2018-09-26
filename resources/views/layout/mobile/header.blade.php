<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{$title}}</title>
    <meta name="keywords" content="{{$keyword}}"/>
    <meta name="description" content="{{$description}}"/>
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ URL::asset('css/m.style.css') }}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Cache-Control" content="no-siteapp">
</head>
<style>
    .w{
        width: 100%;
    }
</style>
<body>
<header>
    <div class="nav_main clearfix w">
        <a href="{{URL::to('/')}}"  title="海峡两岸">
            <img src="{{URL::asset('images/logo.png')}}" class="logo" height="38px" alt="海峡两岸">
        </a>
        <a href="{{URL::to('/')}}" class="menu current">海峡两岸</a>
        <a href="{{URL::to('/video')}}" class="menu">完整视频</a>
        <a href="{{URL::to('/feature')}}" class="menu">视频花絮</a>
        <span class="icon_hot"></span>
    </div>
</header>
<div class="main w">