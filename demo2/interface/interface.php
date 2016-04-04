<?php
header('Content-Type:text/html; charset=utf-8');
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	interface Compare{
		public function com($a,$b);
	}
	class Count implements Compare{
		public function com($a,$b){
			if($a>$b){
				echo $a."大于".$b;
			}else if($a==$b){
				echo $a."等于".$b;
			}else if($a<$b){
				echo $a."小于".$b;
			}
		}
	}
	$query=new Count();
	$query->com($num1,$num2);
?>