<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/20
 * Time: 16:29
 */

    if(file_exists("test.txt")){
        $fd = fopen("test.txt","r");
        echo '文件打开成功</br>';
        fclose($fd);
    }else{
        echo '文件不存在</br>';
        exit(); //退出程序
    }

    //die方式
    if(!file_exists("test.txt")){
        die('文件不存在</br>'); //打印语句后退出程序
    }

    file_exists("test1.txt") or die('文件不存在!</br>');
    echo 'ok';
?>