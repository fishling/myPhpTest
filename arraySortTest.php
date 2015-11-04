<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/10/10
 * Time: 15:20
 */
    $arr = array(-1,4,5,-10,56,10.2,-34);

    //冒泡排序
    function bubbleSort(&$arr){ //这里要传地址
        $temp = 0;
        for($i = 0; $i < count($arr); $i++){
            for($j = $i; $j < count($arr); $j++){
                if($arr[$i] > $arr[$j]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }
        }
    }

    //选择排序
    function selectSort(&$arr){
        for($i = 0; $i < count($arr)-1; $i++){
            //假设$i就是最小的
            $minVal = $arr[$i];
            //记录最小值的下标
            $minIndex = $i;
            for($j = $i+1; $j < count($arr); $j++){
                if($minVal > $arr[$j]){
                    $minVal = $arr[$j];
                    $minIndex = $j;
                }
            }
            //最后交换
            if($i <> $minIndex){
                $arr[$minIndex] = $arr[$i];
                $arr[$i] = $minVal;
            }
        }
    }

    //插入排序
    function insertSort(&$arr){
        $temp = 0;
        for($i = 1; $i < count($arr); $i++){
            //把i之前的数视为有序数组,把i插入合适的位置
            $insertVal = $arr[$i];
            $index = $i-1;
            while($index >= 0 && $insertVal < $arr[$index]){
                $arr[$index+1] = $arr[$index];
                $index--;
            }
            if($index+1 != $i){
                $arr[$index+1] = $insertVal;
            }
        }
    }

    //bubbleSort($arr);
    //selectSort($arr);
    insertSort($arr);
    print_r($arr);


?>