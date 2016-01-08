<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
		<title>电话本</title>
	</head>
	<body>
		<form method="post" action="../backend/insert.php"> 
			<div>
				<h1>添加联系人</h1>
				姓名
				<input type="text" style="width:200px" name="store">
			</div>
			<br/>
			<div>
				电话
				<input type="text" style="width:500px" name="www">
			</div>
			<br/>
			<input type="submit">
		</form>
		<hr/>
		<form method="post" action="../backend/select.php"> 
			<div>
				<h1>查找并删除联系人</h1>
				姓名
				<input type="text" style="width:200px" name="name">
			</div>
			<br/>
			<input type="submit">
		</form>
			<hr/>
			<h2>电话本（按首字母排列）：</h2>
			<br/>
  		<?php
			include('../backend/mysql.php');
			$db=new Mysql;
			$select=$db->select("web");
			$res = $dbh->prepare($select);
			$res->execute();
			foreach($res as $v){
				echo '姓名:'.$v['shopname'].' ';
				echo '电话:'.$v['fullpath'].'<br/>';
			}
			?> 
		
	</body>
</html>