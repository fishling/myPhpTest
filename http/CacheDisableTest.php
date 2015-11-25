<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/25
 * Time: 17:04
 * 禁用浏览器缓存
 */
    header("Expires: -1");
    header("Cache-Control: no_cache");
    header("Pragma: no-cache");

    echo 'hello cache';
?>

<html>
    <img src="../resource/HTTP响应详解.png" id="myimg" />
</html>