<?php
		$dsn = "mysql:host=localhost;dbname=homework";
		$passwd = '';
		$username = 'root';
		$dbh = new PDO($dsn,$username,$passwd);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION);
		$dbh->exec('set names utf8');
	class Mysql {
  
        public function insert($table,$fields,$value){
        return "INSERT IGNORE INTO $table $fields values $value";
		}
		public function select($table){
			return 	"SELECT * FROM $table";
		}
		public function delete($web,$id=null){
			return "delete from $web where $id";
		}
}
?>