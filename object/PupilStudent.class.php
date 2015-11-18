<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/18
 * Time: 16:26
 * 继承
 */

require_once 'Student.class.php';
class PupilStudent extends Student{
    /*public function __construct(){
        //子类不会自动调用父类的默认构造函数，这点与java不同
        echo 'PupilStudent construct';
    }*/

    //重写父类方法
    public function exam(){
        //访问父类的方法
        //return '小'.Student::exam();
        return '小'.parent::exam();
    }
}