<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/25
 * Time: 10:30
 * 防盗链技术
 */
    if(isset($_SERVER['HTTP_REFERER'])){
        $refer = $_SERVER['HTTP_REFERER'];
        //限制只能从myPhpTest/http/目录下访问
        //这里要用全等==符号判断，注意！
        if(strpos($refer,"http://localhost/myPhpTest/http/") !== false && strpos($refer,"http://localhost/myPhpTest/http/") == 0){
            echo '查看账号信息成功';
            exit();
        }
    }

    //header可以向http响应写入信息
    //这句话会向浏览器发送一个302状态码，并告诉浏览器重新访问一个页面
    //header("Location:error.php");
    //间隔1秒重定向到error页面
    header("Refresh:1;url=http://localhost/myPhpTest/http/error.php");
?>