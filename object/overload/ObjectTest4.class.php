<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/19
 * Time: 14:42
 * 重载
 */

class ObjectTest4 {
    /*php5中的重载是通过魔术函数实现
     *当调用的方法不存在时，默认调用__call方法
     * php5中还有很多魔术函数(__set,__get等)，魔术常量(__LINE__,__FILE__等)
     */
    function __call($method,$a){
        if($method == "test"){
            if(count($a) == 1){
                $this->test1($a[0]);
            }elseif(count($a) == 2){
                $this->test2($a[0],$a[1]);
            }
        }
    }

    public function test1($p){
        echo '接收一个参数：'.$p;
    }

    public function test2($p1,$p2){
        echo '接收两个参数：'.$p1.'，'.$p2;
    }
}