<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/17
 * Time: 15:40
 */
    require_once 'Child.class.php';

    global $global_num; //使用全局变量
    $global_num = 0;

    $child1 = new Child('小丽');
    $child1->joinGame();
    $child2 = new Child('小美');
    $child2->joinGame();
    $child3 = new Child('小花');
    $child3->joinGame();

    echo '总共'.$global_num.'个小孩加入了游戏</br>';
    //Child::$num 和 $child3::$num 都可以访问这个静态变量
    echo '总共'.Child::$num.'个小孩加入了游戏';
?>