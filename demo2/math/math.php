<?php
	class Math{
		
		function __construct($a,$b,$c,$d,$e){
			if($e=='+'){
				$m=$a+$c;
				$n=$b+$d;
				if($n==0){
					echo $m;
				}else{
				echo $m.'+'.$n.'i';
				}
			}
			else{
				$m=$a-$c;
				$n=$b-$d;
				if($n==0){
					echo $m;
				}else{
				echo $m.'+'.$n.'i';
				}
			}

		}
	}
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$count=new Math($a,$b,$c,$d,$e);
?>