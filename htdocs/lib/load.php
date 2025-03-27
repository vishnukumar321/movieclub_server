<?php
include_once "lib/include/database.php";
include_once "lib/include/movie.class.php";
include_once "lib/include/user.class.php";
include_once "lib/include/session.class.php";
session_start();
function get_file($name){
    include $_SERVER['DOCUMENT_ROOT']."/lib/template/_$name.php";
}
global $conf;
$conf=file_get_contents($_SERVER['DOCUMENT_ROOT']."/../project/movieclubconfic.json");
function get_conf($name){
    global $conf;
    $data=json_decode($conf,true);
    if(isset($data[$name])){
        return $data[$name];
    }

}