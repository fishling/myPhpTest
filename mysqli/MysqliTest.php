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

        $sql = "select * from user;";
        $res = $connection->excute_dql($sql);
        if(isset($res)){
            while($row=$res->fetch_row()){
                foreach($row as $key => $val){
                    echo "$val ";
                }
                echo '</br>';
            }
        }
        $connection->releaseRes($res);

        $connection->closeConnection();
    }catch(Exception $e){
        echo $e->getFile().'第'.$e->getLine().'行报错，信息为：'.$e->getMessage();
    }
?>