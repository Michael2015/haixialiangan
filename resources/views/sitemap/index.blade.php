<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>央视海峡两岸_海峡两岸视频正在直播中_网站地图</title>
    <style>
        a{color:rgb(0, 0, 238);font-size:13px;}
    </style></head>
<body>
<ol>
    <li><a href='http://haixialiangan.wang'>央视海峡两岸_海峡两岸视频正在直播中</a></li>
    <li><a href='http://haixialiangan.wang/sitemap.html'>央视海峡两岸_海峡两岸视频正在直播中_网站地图</a></li>
    <li><a href='http://haixialiangan.wang/feature'>央视海峡两岸直播视频片段列表</a></li>
    @foreach ($feature as $feature)
        <li><a href='/feature/{{$feature['date']}}/{{$feature['guid']}}.html'>{{$feature['video_title']}}_直播视频花絮</a></li>
    @endforeach
    <li><a href='http://haixialiangan.wang/video'>央视海峡两岸直播视频列表</a></li>
    @foreach ($video as $video)
        <li><a href='/video/{{$video['guid']}}.html'>{{$video['video_title']}}_完整直播视频</a></li>
    @endforeach
</ol>
</body>
</html>