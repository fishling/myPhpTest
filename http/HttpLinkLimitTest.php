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
        if(strpos($refer,"http://localhost/myPhpTest/http/") != false && strpos($refer,"http://localhost/myPhpTest/http/") == 0){
            echo '查看账号信息成功';
        }else {
            header("Location:error.php");
        }
    }

?>