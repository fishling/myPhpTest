<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/9/24
 * Time: 17:34
 */
    //第一种定义
    $hens1[0] = 3;
    $hens1[1] = 5;
    for($i = 0; $i < 2; $i ++){
        echo '第'.($i+1).'只鸡的体重为'.$hens1[$i].'</br>';
    }

    //第二种定义
    echo '</br>';
    $hens2 = array(3,5,7,8,11);
    $allweight = 0;
    for($i = 0; $i < count($hens2); $i ++){
        echo '第'.($i+1).'只鸡的体重为'.$hens2[$i].'</br>';
        $allweight += $hens2[$i];
    }
    echo '总体重是'.$allweight.'</br>';
    echo '</br>';

    //数组里的值类型可以不同；数组的下标也可以自己指定
    $arr1['logo'] = "北京";
    $arr1['hsp'] = 123;
    print_r($arr1);  //打印数组信息
    echo '</br>';
    var_dump($arr1); //显示更加详细的信息
    echo '</br>';

    //使用小数做key，会自动截取整数部分
    $arr2 = array("logo"=>"北京","hsp"=>123,4.5=>678);
    foreach($arr2 as $key=>$val){
        echo $key.'='.$val.'</br>';
    }

    //没有指定下标，数组最大的下标往后加1
    $arry3 = array(5=>"logo",567,90);
    echo $arry3[5];
    echo $arry3[6];
    echo '</br>';

    //数组可以动态增长
    $arr4 = array(2,3);
    $arr4[2] = 5;
    echo $arr4[2];
?>