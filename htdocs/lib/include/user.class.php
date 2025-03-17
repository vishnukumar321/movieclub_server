<?php
include_once "lib/load.php";
class user{
    public $conn;
    public $name;
    public $id;
    public function __construct($uname){
        // echo "sfs";
        if(!$this->conn){
            $this->conn=database::get_conn();
        }
        $conn=$this->conn;
        $sql="SELECT * FROM `user` WHERE `username` = '$uname'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            $this->id=$row['id'];
            $this->name=$row['username'];
        }
    }
    public static function signup($name,$email,$phone,$pass){
        $pass=password_hash($pass,PASSWORD_BCRYPT);
        $conn=database::get_conn();
        $sql="INSERT INTO `user` (`username`, `email`, `phone`, `password`, `active`)
VALUES ('$name', '$email', '$phone', '$pass', '1');";
        if($conn->query($sql) == true){
            $query="INSERT INTO `profile` (`name`, `email`, `phone`, `gender`)
VALUES ('$name', '$email', '$phone', 'male');";
            if($conn->query($query)){
                $_SESSION['username']=$name;
                return true;
            }
        }else{
            return false;
        }


    }
    public static function login($name,$pass){
        $conn=database::get_conn();
        $sql="SELECT * FROM `user` WHERE `username` = '$name'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            if(password_verify($pass,$row['password'])){
                $_SESSION['username']=$name;
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    public static function checking($name){
        $conn=database::get_conn();
        $sql="SELECT * FROM `user` WHERE `username` = '$name'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            return true;
        }else{
            return false;
        }
    }
    public function __call($name, $arguments)
    {
        if(substr($name,0,3)=="get"){
            $name=substr($name,3);
            return $this->data_get($name);

        }elseif(substr($name,0,3)=="set"){
            $name=substr($name,3);
            return $this->data_set($name,$arguments);
        }
    }
    public function data_get($data){
        
        if(!$this->conn){
            $this->conn=database::get_conn();
        }
        $id=$this->id;
        $conn=$this->conn;
        $sql="SELECT * FROM `profile` WHERE `id` = '$id'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            return $row[$data];
        }else{
            return false;
        }
    }
    public function data_set($data,$arguments){
        if(!$this->conn){
            $this->conn=database::get_conn();
        }
        $id=$this->id;
        $conn=$this->conn;
        $sql="UPDATE `profile` SET `$data` = '$arguments[0]' WHERE `id` = '$id';";
        if($conn->query($sql)==true){
            return true;
        }else{
            return false;
        }
    }
}