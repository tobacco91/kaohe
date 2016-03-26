<?php
	$number1=$_POST['number1'];
	$number2=$_POST['number2'];
	$select=$_POST['select'];
	class Count{

		function __construct($num1,$num2,$selection){
    		switch ($selection){
	    		case '+':
	    		$rel=$num1+$num2;
	    		break;
	    		case '-':
	    		$rel=$num1-$num2;
	    		break;
	    		case '*':
	    		$rel=$num1*$num2;
	    		break;
	    		case '/':
	    		$rel=$num1/$num2;
	    		break;
    	    }
    		echo $rel;
		}
	}
	new Count($number1,$number2,$select);

?>