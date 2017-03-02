<?php
extract($_POST);

$login = $_POST['lg_username'];
$pwd = $_POST['lg_password'];

$bdd = new PDO('sqlite:../db/linkmanager.db');
$sql = $bdd->query("SELECT pwd FROM access WHERE login='".$login."'");
$data = $sql->fetch(PDO::FETCH_OBJ);


if(isset($data->pwd) && $data->pwd == md5($pwd))
{
	session_start();
	$_SESSION['valid'] = true;
	$_SESSION['login'] = $login;
	header("Location: ../links.php");
}

else { 
	header("Location: index.php");
}