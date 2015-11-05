<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/5
 * Time: 14:16
 */
    $arr = array(array(1,3,5),array(2,4,6,3),array(0,8,-1,2,42,6));
    echo $arr[0][1];

    echo '</br>';
    for($i = 0; $i < count($arr); $i++){
        for($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j];
            echo '&nbsp;';
        }
        echo '</br>';
    }

    echo '</br>';
?>