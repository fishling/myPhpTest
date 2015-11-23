<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/23
 * Time: 16:19
 * 异常处理
 */
    function checkNum($u){
        if($u > 100){
            throw new Exception('输入值过大'.$u.'</br>');
        }else{
            echo '输入值为'.$u;
        }

    }

    try{
        checkNum(200);
        //下面这些是错误，不是异常，不能使用异常捕获来处理
        //$i = 8/0;
        //$fd = fopen("test1.txt","r");
    }catch(Exception $e){
        echo '第'.$e->getLine().'行报错，信息为：'.$e->getMessage();
    }

    //自定义顶级异常处理器
    function myexception($e){
        echo '我是顶级异常处理器'.$e->getMessage();
    }
    //修改默认的顶级异常处理器
    set_exception_handler("myexception");

    checkNum(200);
?>