<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/9/18
 * Time: 16:36
 */
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
?>