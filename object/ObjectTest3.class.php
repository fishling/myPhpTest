<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/18
 * Time: 15:59
 */

class ObjectTest3 {
    private $n1;
    private $n2;

    /*public function __set($pro_name,$pro_val){
        $this->pro_name = $pro_val;
    }

    public function __get($pro_name){
        if(isset($this->pro_name))
            return $this->pro_name;
        else
            return null;
    }*/

    /**
     * @return mixed
     */
    public function getN1()
    {
        return $this->n1;
    }

    /**
     * @param mixed $n1
     */
    public function setN1($n1)
    {
        $this->n1 = $n1;
    }

    /**
     * @return mixed
     */
    public function getN2()
    {
        return $this->n2;
    }

    /**
     * @param mixed $n2
     */
    public function setN2($n2)
    {
        $this->n2 = $n2;
    }


}