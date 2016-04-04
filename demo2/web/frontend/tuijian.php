<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
		<title>推荐</title>
	</head>
	<body>
		<form method="post" action="../backend/insert.php"> 
			<div>
				请输入店名
				<input type="text" style="width:200px" name="store">
			</div>
			<br/>
			<div>
				请输入您想要添加的网址
				<input type="text" style="width:500px" name="www">
			</div>
			<input type="submit"></form><hr/>
			已收藏的网址：
			<br/>
  		<?php
			include('../backend/mysql.php');
			$db=new Mysql;
			$select=$db->select("web");
			$res = $dbh->prepare($select);
			$res->execute();
			foreach($res as $v){
				?>
				<?php
				$link=$v['fullpath'];
				echo "<a href='{$link}'>".$v['shopname']."</a>";
				?>
				<!-- <form action="../backend/delete.php" method="POST">
				<input type="submit" name=<?php //echo "$v['id']"; ?>><br/>
				</form> -->
				<td><a href="../backend/delete.php?userId=<?php echo $v['id'] ?>" 
				onclick="return confirm('确定要删除吗？')">删除</a></td><br/>
			<?php
			}
			?> 
		
	</body>
</html>