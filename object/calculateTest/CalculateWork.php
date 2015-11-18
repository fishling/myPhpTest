<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/16
 * Time: 17:24
 */
    require_once 'Calculator.class.php';

    $doType = $_REQUEST['doType'];
    $calculator = new Calculator();
    if($doType == "siZeYunSuan"){
        $num1 = $_REQUEST['num1'];
        $num2 = $_REQUEST['num2'];
        $oper = $_REQUEST['oper'];

        echo '计算结果是：'.$calculator->calculate($num1,$num2,$oper);
    }else if($doType == "circuitAreaCal"){
        $rad = $_REQUEST['radius'];

        echo '计算结果是：'.$calculator->circuitArea($rad);
    }else if($doType == ""){

    }

?>
</br>
<a href="CalculateView.php">返回主界面</a>