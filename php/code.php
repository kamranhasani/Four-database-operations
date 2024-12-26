<?php 
include("config.php");
session_start();
function test ($value){
    $v = trim($value);
    $m = strip_tags($v);
    $n = stripcslashes($m);
    $a = htmlspecialchars($n);
    $test = htmlentities($a);
   
    
    return $test;
   }


   function tokencheck($value){
    if(isset($_SESSION['token']) && $_SESSION['token']==$value){
        unset($_SESSION['token']);
        return true;
    }
    return false;
}



   function insert($name,$data,$prise,$number)
{
    global   $db, $list;
    $name=test($name);
    $data=test($data);
    $prise=test($prise);
    $number=test($number);

$sql=$db->prepare("INSERT INTO `tb_list` ( `name`, `data`, `prise`, `number`) VALUES (?,?,?,?)  ");
$sql->bindValue(1,$name);
$sql->bindValue(2,$data);
$sql->bindValue(3,$prise);
$sql->bindValue(4,$number);
$sql->execute();
return $sql;
}



function search ($name){

    global $list,$db;

    $name=test($name);

    $sql=$db->prepare("SELECT * FROM `$list` WHERE name=? ");
    $sql->bindValue(1,$name);
    $sql->execute();
    if ($sql->rowcount()>=1) { 
        $rows=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $row) {
            $_SESSION['name'] =$row['name'];
        }
        return $sql;
}
return false;
}


function select ()
{
    global $list,$db;
    $sql=$db->prepare("SELECT * FROM `$list` ORDER BY  'id'  DESC  ");
    $sql->execute();
    return $sql;
}

function delete($id)
{
    global $list,$db;
   
            $sql=$db->prepare("DELETE FROM `$list` WHERE id=? ");
            $sql->bindValue(1, $id);
            $sql->execute();
            return $sql;
        
    
}



function upde ($id){

    global $list,$db;

    $sql=$db->prepare("SELECT * FROM `$list` WHERE id=? ");
    $sql->bindValue(1,$id);
    $sql->execute();
         
        return $sql;
}


function admin($id,$name,$data,$prise,$number)
{
	global $list,$db;
    $id=test($id);
    $name=test($name);
    $data=test($data);
    $prise=test($prise);
    $number=test($number);
	$sql=$db->prepare("UPDATE `$list` SET `name`=?,`data`=?,`prise`=?,`number`=? WHERE id=?");
	$sql->bindValue(1,$name);
	$sql->bindValue(2,$data);
	$sql->bindValue(3,$prise);
	$sql->bindValue(4,$number);
	$sql->bindValue(5,$id);
	$sql->execute();
	return $sql;
	
}

function selectsr ($name)
{
    global $list,$db;
    $sql=$db->prepare("SELECT * FROM `$list`WHERE name=?  ");
    $sql->bindValue(1,$name);
    $sql->execute();
    return $sql;
}
?>