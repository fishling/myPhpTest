<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/9/17
 * Time: 17:31
 */
    //require用法
    //require 'funcs.php';
    require_once 'funcs.php';

    //include用法
    //include 'funcs.php';
    //include 'funcs.php';
    //include_once 'funcs.php';

    echo 'success';

    //调用函数时系统会分配新栈，每个栈中的变量是相互独立的
    function abc($n){
        if($n > 2){
            abc(--$n);
        }
        echo '</br>$n='.$n;
    }
    abc(4); //输出2 2 3

    //global
    $a = 12;
    function abc2(){
        global $a; //表示使用外部变量
        $a += 45;
    }
    abc2();
    echo '</br>$a='.$a;

    //unset
    $b = 12;
    function abc3($b){
        unset($b); //销毁这个变量
        $b = 15;
    }
    abc3($b);
    echo '</br>$b='.$b; //输出值还是12  why

    //给函数中的变量赋默认值
    echo '</br>';
    function abc4($b,$a=2){
        $res = $a + $b;
        return $res;
    }
    $e = 70;
    echo abc4($e) .'</br>'; //72
    echo abc4($e,90); //160

    //PHP默认是值传递，如果需要引用（地址）传递使用&变量名
    echo '</br>';
    $a = 123;
    function abc5(&$b){
        $b = 314;
    }
    abc5($a);
    echo $a; //314


?>