<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/12
 * Time: 13:19
 */
    require_once 'Cat.class.php';

    $cat1 = new Cat();
    $cat1->name = '小白';
    $cat1->color = '白色';
    $cat1->age = 10;
    echo $cat1->name;

    $cat2 = new Cat; //括号可以不写
    $cat2->name = '小花';

    $cat3 = $cat1;
    $cat3->age = 34;
    echo $cat1->age;

?>