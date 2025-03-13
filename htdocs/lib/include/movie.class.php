<?php
include_once "lib/load.php";
class movie{
    public static function get_movie($name){
        $conn=database::get_conn();
        $sql="SELECT * FROM `movie` WHERE `name` = '$name'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $row=$result->fetch_assoc();
            return $row['link'];
        }
    }
}