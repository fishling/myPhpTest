<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/18
 * Time: 16:35
 * 继承
 */
    require_once 'PupilStudent.class.php';
    require_once 'SeniorStudent.class.php';

    $student1 = new PupilStudent('小明',7,100);
    $student2 = new SeniorStudent('大明',20,89);
    $student1->showInfo();
    echo $student2->exam();
?>