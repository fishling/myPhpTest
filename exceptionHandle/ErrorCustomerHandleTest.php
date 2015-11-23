<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/23
 * Time: 11:19
 * 自定义错误处理函数
 */
    function my_error($errorno,$errormes){
        echo "<font size=' 5' color='red'>$errorno</font><br/>";
        echo '错误信息是：'.$errormes.'<br/>';
        //exit();
    }

    //设置错误处理函数
    set_error_handler("my_error",E_WARNING); //错误级别，E_ALL表示所有错误

    $fd = fopen("test1.txt","r");
    echo 'ok<br/>';

    set_error_handler("my_error",E_USER_WARNING);
    $age = 700;
    if($age > 120){
        //trigger_error('输入年龄过大'); //默认错误提示
        trigger_error('输入年龄过大',E_USER_WARNING);
    }

?>