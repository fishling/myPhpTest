<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/16
 * Time: 17:36
 * 构造函数、析构函数
 */

class ObjectTest2 {
    public $name;
    public $age;

    //构造函数两种形式
    //php5才支持__construct,两种同时存在优先选此方法
    /*public function ObjectTest(){
        echo '我是构造方法</br>';
    }
    public function __construct(){
        echo '我是php5构造方法</br>';
    }*/

    //构造方法的重载比较复杂，不同于java。__construct($iname,$iage)和__construct()不能同时存在
    public function __construct($iname,$iage){
        $this->name = $iname;
        $this->age = $iage;
    }

    public function showInfo(){
        echo '</br>姓名='.$this->name.'；年龄='.$this->age;
    }

    //析构函数，没有参数，用于释放资源，自动调用
    public function __destruct(){
        echo '</br>'.$this->name.'析构函数';
    }
}