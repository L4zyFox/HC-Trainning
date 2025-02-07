<?php
class User {

    public $id;
    public $username;
    public $password;
    public $connection;

    public function __construct(){
        // Sai daqui Hacker!!! ... Isso é só um banco de teste hahahah Não vai achar nada aqui!
        $this->connection = new mysqli('localhost','hcdbuser','123456','hc_prog');
    }

    public function getAll(){
        $sql = "SELECT * FROM users";
        $result = $this->connection->query($sql);
        $users = [];
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }
        return $users;
    }

    public function getUserByUsername($username){
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->connection->query($sql);
        $user = $result->fetch_assoc();
        return $user;
    }

    public function registerUser($username, $password){
        $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'user')";
        $result = $this->connection->query($sql);
        return $result;
    }



    public function __destruct(){

        $this->connection->close();

    }
}