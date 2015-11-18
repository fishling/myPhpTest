<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/12
 * Time: 13:19
 */
    require_once 'ObjectTest.class.php';
    require_once 'conAndDestruct/ObjectTest2.class.php';
    require_once 'encap/ObjectTest3.class.php';

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

    //对象初始化时进入栈区，所以先创建的对象后被销毁。析构函数在程序结束或者对象成为垃圾对象（没有任何变量引用它）时会被调用
    $object4 = new ObjectTest2('小黑',7);
    $object5 = new ObjectTest2('黑白',8);
    $object4->showInfo();
    $object6 = new ObjectTest2('小白',7);
    $object5->showInfo();
    $object6->showInfo();
    $object4 = null; //此时$object4为垃圾对象，析构函数立刻调用

    $object7 = new ObjectTest3();
    //采用__set,__get方式访问私有变量，但不推荐
    //$object7->n1 = 'hello';
    //采用普通set和get方法
    $object7->setN1("hello");
    echo $object7->getN1();
?>