<?php
session_start();
$id=$_POST['id'];
$password=$_POST['password'];
if($id=='admin'&& $password=="123"){
    $_SESSION['auth']=true;
    $_SESSION['id']=$id;
}
elseif($id=='client'&&$password=="321"){
    $_SESSION['auth']=true;
    $_SESSION['id']="Client";
}
header("location:index.php");
?>