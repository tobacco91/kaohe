<?php
session_start(); 
$code=$_POST['yanzheng'];
if(strcasecmp($code,$_SESSION['check'])==0){ 
   echo "<script>alert('sucess');window.location.href='uploadpicture.html';</script>" ;
}
else{
	echo "<script>alert('fail');window.location.href='yesorno.html';</script>";
}
?>