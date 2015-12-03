<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/3
 * Time: 10:12
 */

require_once 'MysqliTool.class.php';

class UserService {
    private $connection;
    private $stmt;

    public function __construct(){
        $this->connection = new MysqliTool();
    }

    public function createUsers($users)
    {
        $sql = "insert into user(name,password,email,age) values (?,?,?,?)";
        $this->stmt = $this->connection->getConn()->prepare($sql);

        $this->stmt->bind_param("sssi", $valname, $valpassword, $valemail, $valage);
        for ($i = 0; $i < count($users); $i++) {
            $user = $users[$i];
            $valname = $user->getName();
            $valpassword = $user->getPassword();
            $valemail = $user->getEmail();
            $valage = $user->getAge();
            $this->stmt->execute();
            echo $this->stmt->affected_rows.'Row inserted.ID为'.$this->stmt->insert_id.'</br>';
        }
        $this->stmt->close ();
    }

    public function findUserById($id){
        $sql = "select name,age from user where id = ?";
        $this->stmt = $this->connection->getConn()->prepare($sql);
        $this->stmt->bind_param("i",$id);
        $this->stmt->execute();
        $this->stmt->bind_result($name,$age);
        while ($this->stmt->fetch()) {
            echo '</br>'.$name.' '.$age;
        }
        $this->stmt->close ();
    }

    /**
     * @return MysqliTool
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param MysqliTool $connection
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;
    }


}