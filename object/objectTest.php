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
    echo $cat1->age; //34 这时cat1和cat3指向的是同一个地址

    function test($c,&$var,$arr){
        $c->age = 1;
        $var = 'aa';
        $arr[1] = 99;
    }
    $var = 'ab';
    $arr = array(0,10);
    test($cat1,$var,$arr);
    /*
     * 对象传入函数的时候，传入的是地址
     * 其他基本类型传入函数的时候，默认传入的是值；但是可以加&传入地址
     */
    echo $cat1->age.'||'.$var.'||'.$arr[1];
    echo '</br>'.$cat1->add(5,6);

?>