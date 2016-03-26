<?php
//调用insert方法
	   include('mysql.php');
       $store=$_POST['store'];
       $www=$_POST['www'];
	   $db=new Mysql;
	   $insert=$db->insert("web","(shopname,fullpath)","('$store','$www')");
	   $res = $dbh->prepare($insert);
	   $res->execute();
	   echo "<script>alert('success');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
	
?>
