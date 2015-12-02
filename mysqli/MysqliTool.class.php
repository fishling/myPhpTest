<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/2
 * Time: 14:49
 */

class MysqliTool {
    private $hostIp = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db = 'test';
    private $conn;

    public function __construct(){
        $this->connect();
    }

    public function connect(){
        $this->conn  = new MySQLi($this->hostIp,$this->username,$this->password,$this->db);
        if($this->conn->connect_error ){
            throw new Exception("连接失败".iconv("utf-8","gb2312",$this->conn->connect_error));
        }
        $this->conn->set_charset('utf8');
    }

    public function excute_dql($sql){
        $res = $this->conn->query($sql);
        if(!$res){
            throw new Exception('查询失败'.iconv("utf-8","gb2312",$this->conn->error));
        }
        return $res;
    }

    public function releaseRes($res){
        //释放资源
        $res->free();
    }

    public function closeConnection(){
        //关闭连接,通常不需要写，已打开的非持久连接会在脚本执行完毕后自动关闭
        $this->conn->close();
    }
}