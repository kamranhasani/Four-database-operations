<?php
try{
$local="localhost";
$dbname="list";
$user="root";
$password="";
$db= new PDO("mysql:host=$local;dbname=$dbname",$user,$password);
$db->exec("SET CHARACTER SET utf8");
$db->exec('set names utf8');

}catch(PDOException $error){
    echo $error;
}


$list="tb_list";

?>