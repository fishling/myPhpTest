<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/12
 * Time: 13:19
 */
    require_once 'ObjectTest.class.php';

    $object1 = new ObjectTest();
    $object1->name = '小白';
    $object1->color = '白色';
    $object1->age = 10;
    echo $object1->name;

    $object2 = new ObjectTest; //括号可以不写
    $object2->name = '小花';

    $object3 = $object1;
    $object3->age = 34;
    echo $object1->age; //34 这时object1和object3指向的是同一个地址

    function test($c,&$var,$arr){
        $c->age = 1;
        $var = 'aa';
        $arr[1] = 99;
    }
    $var = 'ab';
    $arr = array(0,10);
    test($object1,$var,$arr);
    /*
     * 对象传入函数的时候，传入的是地址
     * 其他基本类型传入函数的时候，默认传入的是值；但是可以加&传入地址
     */
    echo $object1->age.'||'.$var.'||'.$arr[1];
    echo '</br>'.$object1->add(5,6);

?>