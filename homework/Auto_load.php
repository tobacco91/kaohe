<?php
	class autoload{
		private $config=array();
		public function __construct($config=array()){
			$this->config=$config;
		}
		public function core(){
			foreach($this->config as $path => $file){

				set_include_path(get_include_path().PATH_SEPARATOR.$path); 
				if(substr($file, -4)=='.php'  &&  is_file($path.$file)){
					include $file;
				}else{
					echo 'File does not match';
				}
			}
		}
	// 	public function namespace_core($namespace){
	// 		$this->core();
	// 		use $namespace;
	// 	}

	 }
  $a= new autoload(array(
   	'abc/' => 'a.class.php'
   	)) ;
  $a->core();
  new \A\pikaqiu();
?>
