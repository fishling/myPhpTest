<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/5
 * Time: 16:29
 */
    require_once '../../basic/constTest.php';

    class Calculator {
        function calculate($num1,$num2,$oper){
            $res = 0;
            switch($oper){
                case '+':$res = $num1 + $num2;break;
                case '-':$res = $num1 - $num2;break;
                case '*':$res = $num1 * $num2;break;
                case '/':$res = $num1 / $num2;break;
            }
            return $res;
        }

        function circuitArea($radius){
            return Pai_Value*$radius*$radius;
        }
    }
?>