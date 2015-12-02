<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/11/20
 * Time: 15:50
 */

require_once '../MysqlTool.class.php';
header("Content-type: text/html;charset=utf-8");

class WordService {
    public function addWord($word){
        $en = $word->getEn();
        $ch = $word->getCh();
        try {
            if($this->searchWord($word,false)) {
                echo '这个单词已经存在';
                return;
            }

            $sql = "insert into words(en_word,ch_word) values ('".$en."','".$ch."')";
            $connection = new MysqlTool("localhost", "root", "", "test");
            $res = $connection->excute_dml($sql);
            $connection->closeConnection();
            echo '成功更新'.$res.'条数据';
        }catch(Exception $e){
            echo $e->getFile().'第'.$e->getLine().'行报错，信息为：'.$e->getMessage();
        }
    }

    public function searchWord($word,$isEcho){
        $en = $word->getEn();
        $ch = $word->getCh();
        try {
            if(isset($en) && strlen($en) > 0){
                $sql = "select ch_word from words where en_word = '".$en."' limit 0,1";
                $searchWord = $en;
            }else{
                $sql = "select en_word from words where ch_word like '%".$ch."%'";
                $searchWord = $ch;
            }

            $connection = new MysqlTool("localhost", "root", "","test");
            $res = $connection->excute_dql($sql);
            $rows = mysql_affected_rows($connection->getConn());
            $connection->closeConnection();
            if($rows > 0) {
                if($isEcho) {
                    echo "$searchWord : ";
                    while($row=mysql_fetch_row($res)) {
                        echo "$row[0] ";
                    }

                    echo '</br>';
                }
                return true;
            }
            if($isEcho) {
                echo '这个单词还不存在';
            }
            return false;
        }catch(Exception $e){
            if($isEcho) {
                echo $e->getFile().'第'.$e->getLine().'行报错，信息为：'.$e->getMessage();
            }
            throw $e;
        }
    }
}