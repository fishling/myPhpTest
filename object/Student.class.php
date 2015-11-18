<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/18
 * Time: 16:23
 * 继承
 */

class Student {
    private $name;
    private $age;
    private $grade;

    /*public function __construct(){
        echo 'Student construct';
    }*/
    public function __construct($name,$age,$grade){
        $this->setName($name);
        $this->setAge($age);
        $this->setGrade($grade);
    }

    public function showInfo(){
        echo '姓名:'.$this->getName().',年龄:'.$this->getAge().'岁,成绩:'.$this->getGrade().'分</br>';
    }
    public function exam(){
        return '学生'.$this->getName().'测验</br>';
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

}