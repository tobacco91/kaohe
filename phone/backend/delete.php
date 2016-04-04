<?php
	//调用delect方法
	include('mysql.php');
	$id=$_GET['userId'];
	$db=new Mysql;
	$sql=$db->delete("web","id=$id");
	$res=$dbh->exec($sql);
	header("Location: ../frontend/phone.php"); //跳转到开始页
?>