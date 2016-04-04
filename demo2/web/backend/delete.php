
<?php

include('mysql.php');
$id=$_GET['userId'];
$db=new Mysql;
$sql=$db->delete("web","id=$id");
$res=$dbh->exec($sql);
echo "<script>alert('success');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
?>