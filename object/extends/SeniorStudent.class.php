<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/18
 * Time: 16:30
 * 继承 抽象 接口
 */

require_once 'Student.class.php';
class SeniorStudent extends Student{
    public function exam(){
        return '高中'.Student::exam();
    }

    public function study(){
        echo '学习语数外</br>';
    }

}