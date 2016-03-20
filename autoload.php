<?php
	
 // require_once('name_space.php');
 // use A;
 // $pika = new A\pikaqiu();
 // $pika->qiu();
 
 // // use CAb\ABC;
 // // CAb\ABC();
$socket=socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($socket, 127.0.0.1,2333);
socket_write($socket, 'hello server');
$result=socket_read($socket, 1024);
echo $result;

 
?>