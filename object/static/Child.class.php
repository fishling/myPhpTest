<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/17
 * Time: 15:40
 * 全局变量，静态变量，静态方法
 */

    class Child {
        public $name;
        public static $num=0;
        public static $fee=0;

        public function __construct($name){
            $this->name = $name;
        }

        public function joinGame(){
            //使用全局变量
            global $global_num;
            $global_num++;
            //使用静态变量
            self::$num++;
            echo $this->name.'加入游戏</br>';
        }

        //静态方法，只能引用静态变量，不能引用成员变量
        public static function enterSchool($fee){
            self::$fee += $fee;
        }

        public static function getFee(){
            return self::$fee;
        }
    }
?>