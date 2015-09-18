<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/9/16
 * Time: 15:02
 */
    $a = 30;
    $b = 5;
    if($a%$b == 0)
        echo "能整除";
    else
        echo "不能整除";

    echo '</br>$a==$b';

    $b = 30.0;
    if($a==$b)
        echo "</br>$a==$b";

    if($a===$b)
        echo '</br>$a==$b';

    $a!=$b;
    $a!==$b;

    //字符串运算符
    echo '</br>';
    $a = "Hello";
    $b = $a . " world!";
    echo $b; // 输出 Hello world!

    echo '</br>';
    $x="Hello";
    $x .= " world!";
    echo $x; // 输出 Hello world!


    $a = 1;
    switch($a){
        case 10:
            echo '10';
            break;
        default:
            echo 'other';
        case 12:
            echo '12';
            break;
    }
?>