<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/2
 * Time: 14:49
 */
    require_once 'MysqliTool.class.php';

    try {
        $connection = new MysqliTool();

        /*$sql = "select * from user;";
        $res = $connection->excute_dql($sql);
        if(isset($res)){
            while($row=$res->fetch_row()){
                foreach($row as $key => $val){
                    echo "$val ";
                }
                echo '</br>';
            }
        }
        $connection->releaseRes($res);*/

        /*$sql = "insert into user(name,password,email,age) values ('小猴子',md5(123456),'monkey@163.com',5);";
        $res = $connection->excute_dml($sql);
        echo '成功更新'.$res.'条数据</br>';*/

        echo '</br>';
        //批量执行
        $sql = "select * from user;";
        $sql .= "select * from words;";
        $connection->multi_excute_dql($sql);
        do {
            if ($result=$connection->getConn()->store_result()){
                while ($row = $result->fetch_row()) {
                    foreach($row as $key => $val){
                        echo "$val ";
                    }
                    echo '</br>';
                }
                $connection->releaseRes($result);
            }
            if ($connection->getConn()->more_results()) {
                echo "-----------------</br>";
            }
        }while($connection->getConn()->next_result());

        $connection->closeConnection();
    }catch(Exception $e){
        echo $e->getFile().'第'.$e->getLine().'行报错，信息为：'.$e->getMessage();
    }
?>