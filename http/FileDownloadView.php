<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/26
 * Time: 15:38
 * 文件下载
 */
    header("content-type:text/html;charset=utf-8");
?>
<html>
<head>
    <!--meta http-equiv="content-type" content="text/html;charset=utf-8"-->
</head>
<body>
<img src="../resource/HTTP请求详解.png" id="img01"/>
<!-- 用get方式提交的时候，对于中文乱码的问题可以使用urlencode进行转码,urldecode进行解码
    如：urlencode("HTTP请求详解") -->
<a href="FileDownloadProcess.php?filename=HTTP请求详解.png">点击下载</a>
</body>
</html>