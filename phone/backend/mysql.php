<?php
		$dsn = "mysql:host=localhost;dbname=homework";
		$passwd = '';
		$username = 'root';
		$dbh = new PDO($dsn,$username,$passwd);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION);
		$dbh->exec('set names utf8');

		//建立增删改查类
	class Mysql {
  
        public function insert($table,$fields,$value){
        return "INSERT IGNORE INTO $table $fields values $value";
		}
		public function select1($table,$name){
			return 	"SELECT * FROM $table WHERE $name";
		}
		public function delete($web,$id=null){
			return "delete from $web where $id";
		}
		public function select($table){
			return 	"SELECT * FROM $table ORDER BY CONVERT(shopname USING gbk)";//姓名按首字母顺序排列
		}

}
?>