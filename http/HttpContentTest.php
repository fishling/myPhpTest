<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/24
 * Time: 15:46
 */
    //打印HTTP协议信息
    foreach ($_SERVER as $k=>$v) {
        echo "$k=$v</br>";
    }

    //对访问地址加过滤
    /*if($_SERVER['REMOTE_ADDR'] == '::1'){
        header("Location:error.php");
    }*/
?>