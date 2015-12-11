<?php
session_start(); 
$code=$_POST['yanzheng'];
if($code==$_SESSION['check']){ 
   echo "<script>alert('sucess');window.location.href='uploadpicture.html';</script>" ;
}
else{
	echo "<script>alert('fail');window.location.href='yesorno.html';</script>";
}
?>