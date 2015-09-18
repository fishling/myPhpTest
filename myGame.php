<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/9/18
 * Time: 11:55
 */
?>

<html>
    <head>
        <title>猜拳游戏</title>
        <script>
            function mychange(obj){
                var val = obj.value;
                alert(val);
                var img = document.getElementById("myimg");
                img.src = "2.jpg";
            }
        </script>
        <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    </head>
    <body>
        你出
        <select name="you" onchange="mychange(this);">
            <option value="st">石头</option>
            <option value="jz">剪子</option>
            <option value="b">布</option>
        </select>
        <img src="1.jpg" id="myimg" />
    </body>
</html>