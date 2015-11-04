<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/4
 * Time: 21:31
 */
    $arr = array(-90,-43,-3,-1,4,22,55);

    //顺序查找
    function search($arr,$findVal){
        $index = -1;
        for($i = 0; $i < count($arr); $i++){
            if($findVal == $arr[$i]){
                $index = $i;
                break;
            }
        }
        return $index;
    }


    //二分查找，前提是数组已经是有序的
    function binarySearch($arr,$findVal,$leftIndex,$rightIndex){
        if($leftIndex > $rightIndex)
            return -1;
        //找到中间这个数
        $middleIndex = round(($leftIndex+$rightIndex)/2);
        if($findVal > $arr[$middleIndex]){
            return binarySearch($arr,$findVal,$middleIndex+1,$rightIndex);
        }else if($findVal < $arr[$middleIndex]){
            return binarySearch($arr,$findVal,$leftIndex,$middleIndex-1);
        }else{
            return $middleIndex;
        }
    }

    //$index = search($arr,3);
    $index = binarySearch($arr,4,0,count($arr)-1);
    if($index < 0)
        echo '没有找到';
    else
        echo '下标为'.$index;
?>