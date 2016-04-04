<?php
 	header("Content-Type:text/html;charset=utf-8");
	include('mysql.php');
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$db=new mysql;
	//调用select方法
	$select1=$db->select1("web","shopname='$name'");
	$res = $dbh->prepare($select1);
	$res->execute();
	foreach($res as $v){
				?>
				<?php
				echo '姓名:'.$v['shopname'].' ';
				echo '电话:'.$v['fullpath'];
				?>
				<td><a href="../backend/delete.php?userId=<?php echo $v['id'] ?>" 
				onclick="return confirm('确定要删除吗？')">删除</a></td><br/>
				<!-- 调用delect方法 -->
			<?php
			}
			?> 


