<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/9/17
 * Time: 16:59
 */
    //金字塔的一半
    for($i = 1; $i <= 5; $i++){
        for($j = 1; $j <= $i; $j++){
            echo '*';
        }
        echo '</br>';
    }

    //金字塔
    echo '</br>';
    $n = 10;
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= ($n-$i); $j++){
            echo "&nbsp;&nbsp;";
        }
        for($j = 1;$j <= (($i-1)*2+1); $j++){
            echo "*";
        }
        echo '</br>';
    }

    //空心金字塔
    echo '</br>';
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= ($n-$i); $j++){
            echo "&nbsp;&nbsp;";
        }
        for($j = 1;$j <= (($i-1)*2+1); $j++){
            if($i == $n) {
                echo "*";
            }else{
                if($j == 1 || $j == ($i-1)*2+1)
                    echo "*";
                else
                    echo "&nbsp;&nbsp;";
            }
        }
        echo '</br>';
    }
    //空心菱形
    echo '</br>';
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= ($n-$i); $j++){
            echo "&nbsp;&nbsp;";
        }
        for($j = 1;$j <= (($i-1)*2+1); $j++){
            if($j == 1 || $j == ($i-1)*2+1)
                echo "*";
            else
                echo "&nbsp;&nbsp;";
        }
        echo '</br>';
    }
    for($i = $n-1; $i >= 1; $i--){
        for($j = 1; $j <= $n-$i; $j++){
            echo "&nbsp;&nbsp;";
        }
        for($j = 1; $j <= (($i-1)*2+1); $j++){
            if($j == 1 || $j == ($i-1)*2+1)
                echo "*";
            else
                echo "&nbsp;&nbsp;";
        }
        echo '</br>';
    }

    //break + 数字 可以指定要跳出的层数
    echo '</br>';
    $i = 0;
    while(++$i){
        switch($i){
            case 5:echo 'quit at 5</br>';break;
            case 10:echo 'quit at 10</br>';break 2;
            default:break;
        }
    }
    echo "i=".$i;

    //continue + 数字
    echo '</br>';
    for($i = 0; $i <= 6; $i++) {
        for ($j = 0; $j < 2; $j++) {
            if($i == 1 && $j == 1)
                continue ;
            if($i == 5 && $j == 0)
                continue 2;
            echo '$j=' . $j . '</br>';
        }
        echo '$i=' . $i . '</br>';
    }
    echo 'hello';

    //goto语句 在5.3版本以上才有
    echo '</br>';
    for($i = 0,$j=50; $i < 100; $i++) {
        while($j--){
            if($j == 17)
                goto end;
        }
    }
    echo '$i='.$i;
    end:
        echo '$j='.$j.',$i='.$i;
?>