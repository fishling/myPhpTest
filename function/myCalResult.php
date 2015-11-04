<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/9/18
 * Time: 10:39
 */
    require_once 'funcs.php';

    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $oper = $_REQUEST['oper'];

    $res = calculate($num1,$num2,$oper);
    /*switch($oper){
        case '+':$res = $num1 + $num2;break;
        case '-':$res = $num1 - $num2;break;
        case '*':$res = $num1 * $num2;break;
        case '/':$res = $num1 / $num2;break;
    }*/
    echo '运算结果是'.$res;
?>
<a href="myCal.php">返回</a>