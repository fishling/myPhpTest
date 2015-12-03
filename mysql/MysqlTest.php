<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/30
 * Time: 16:56
 */
    //查看php设置，及扩展包设置
    //phpinfo();

    require_once 'MysqlTool.class.php';

    try{
        $connection = new MysqlTool("localhost", "root", "","test");

        //查询
        $sql = "select * from user;";
        $res = $connection->excute_dql($sql);
        //依次取出下一条数据
        /*if(isset($res)){
            while($row=mysql_fetch_row($res)){
                //echo "$row[0]--$row[1]--$row[2]--$row[3]--$row[4]";
                foreach($row as $key => $val){
                    //mysql_fetch_assoc函数，打印的是关联数组
                    //mysql_fetch_array函数，同时打印索引数组和关联数组，格式为0--1 id--1 1--liling name--liling 2--abc123 password--abc123 3-- email-- 4--0 age--0
                    //mysql_fetch_object函数，返回的是对象。但一般是自己定义，进行二次封装
                    echo "$val ";
                }
                echo '</br>';
            }
        }*/
        $rows = mysql_affected_rows($connection->getConn());
        $columns = mysql_num_fields($res);
        echo "<table border=1><tr>";
        for($i = 0; $i < $columns; $i++){
            $field_name = mysql_field_name($res,$i);
            echo "<th>$field_name</th>";
        }
        echo "</tr>";
        while($row=mysql_fetch_row($res)){
            echo "<tr>";
            for($j = 0; $j < $columns; $j++){
                echo "<td>$row[$j]</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        $connection->releaseRes($res);

        //新增
        /*$sql = "insert into user(name,password,email,age) values ('李佑希',md5(123456),'liyouxi@163.com',1)";
        $res = $connection->excute_dml($sql);
        echo '成功新增'.$res.'条数据'.mysql_insert_id($connection->getConn());*/

        $sql = "delete from user where id > 9";
        $res = $connection->excute_dml($sql);
        echo '成功删除'.$res.'条数据'.mysql_insert_id($connection->getConn());

        $connection->closeConnection();
    }catch(Exception $e){
        echo $e->getFile().'第'.$e->getLine().'行报错，信息为：'.$e->getMessage();
    }
?>