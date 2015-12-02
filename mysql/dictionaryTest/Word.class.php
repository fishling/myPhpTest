<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/20
 * Time: 15:47
 */

class Word {
    private $en;
    private $ch;

    /**
     * @param mixed $en
     */
    public function setEn($en)
    {
        $this->en = $en;
    }

    /**
     * @return mixed
     */
    public function getEn()
    {
        return $this->en;
    }

    /**
     * @return mixed
     */
    public function getCh()
    {
        return $this->ch;
    }

    /**
     * @param mixed $ch
     */
    public function setCh($ch)
    {
        $this->ch = $ch;
    }


}