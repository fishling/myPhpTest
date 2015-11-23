<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/23
 * Time: 15:05
 * 错误日志记录
 */
    date_default_timezone_set('prc'); //设置时区

    function my_error($errorno,$errormes){
        error_log(date('Y-n-d G:i:s').'  '.$errormes."\r\n",3,"../logs/myerr.txt");
        //exit();
    }

    set_error_handler("my_error",E_WARNING);

    $fd = fopen("test1.txt","r");
?>