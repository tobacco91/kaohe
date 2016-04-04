<?php
	require_once 'factoryCount.class.php';
	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$select = $_GET['select'];
	$mean = cfactory::newObject($select);
	$mean->getValue($num1,$num2);
 ?>