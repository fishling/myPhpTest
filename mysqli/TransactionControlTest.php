<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/2
 * Time: 17:41
 * 事务控制
 */
    require_once 'MysqliTool.class.php';

    $sql1 = "update user set age = age+1 where id = 1";
    $sql2 = "update user set age = age-1 where id = 3";

    $connection = new MysqliTool();
    try {
        //设置自动提交为假
        $connection->getConn()->autocommit(FALSE);
        $connection->excute_dml($sql1);
        $connection->excute_dml($sql2);
        //提交
        $connection->getConn()->commit();
    }catch(Exception $e){
        echo $e->getFile().'第'.$e->getLine().'行报错，信息为：'.$e->getMessage();
        //回滚
        $connection->getConn()->rollback();
    }

?>