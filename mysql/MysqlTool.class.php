<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/1
 * Time: 10:07
 * 操作数据库
 */

class MysqlConnection {
    private $hostIp;
    private $username;
    private $password;
    private $db;
    private $conn;

    public function __construct($hostIp,$username,$password,$db){
        $this->hostIp = $hostIp;
        $this->username = $username;
        $this->password = $password;
        $this->db = $db;

        $this->connect();
    }

    public function connect(){
        //获取连接
        $this->conn = mysql_connect($this->hostIp, $this->username, $this->password);
        if(!$this->conn){
            //die("连接失败".iconv("utf-8","gb2312",mysql_error()));
            throw new Exception("连接失败".iconv("utf-8","gb2312",mysql_error()));
        }
        //选择数据库
        mysql_select_db($this->db) /*or die(iconv("utf-8","gb2312",mysql_error()))*/;
        //设置操作编码
        mysql_query("set names utf8");
    }

    public function excute_dql($sql){
        //发送指令sql,接收返回结果
        //这里的$this->conn参数可以省略，如果不指定连接符，就使用上一次打开的连接
        $res = mysql_query($sql,$this->conn);
        if(!$res){
            throw new Exception('查询失败'.iconv("utf-8","gb2312",mysql_error()));
        }
        return $res;
    }

    public function excute_dml($sql){
        //发送指令sql,接收返回结果
        //这里的$this->conn参数可以省略，如果不指定连接符，就使用上一次打开的连接
        $res = mysql_query($sql,$this->conn);
        if(!$res){
            throw new Exception('执行sql失败'.iconv("utf-8","gb2312",mysql_error()));
        }
        //查看有几条数据
        $num = mysql_affected_rows($this->conn);
        if($num == 0){
            throw new Exception('更新失败'.iconv("utf-8","gb2312",mysql_error()));
        }
        return $num;
    }

    public function releaseRes($res){
        //释放资源
        mysql_free_result($res);
    }

    public function closeConnection(){
        //关闭连接,通常不需要写，已打开的非持久连接会在脚本执行完毕后自动关闭
        mysql_close($this->conn);
    }

    /**
     * @return mixed
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * @param mixed $conn
     */
    public function setConn($conn)
    {
        $this->conn = $conn;
    }
}