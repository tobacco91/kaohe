<?php
    require_once('config.php');
    interface pdoCon{
       
        public static function getInstance();
        public function throw_exception($errMsg);
        public function getAll($sql=null);
        public function select($table='?',$content='?',$front=1,$size=4);
        public function insert($table,$files,$values);
        public function update($table='?',$now='?',$old='?');
        public function delete($table,$id=null);
        public function getNum($table);
        public function free();
        public function query($sql='');
        public function close();

    }

    class PdoMysql implements pdoCon{
        public static $getDbConfig=null;//传入数据库配置
        public static $pconnect=false;//长链接默认不开启
        private static $link=null;//保存PDO连接对象
        private static $connected=false;//判断数据库是否连接成功
        private static $_instance=null;//保存实例化的本类对象
        private static $PDOStatement=null;//保存prepare后的对象
        private static $queryStr=null;//保存sql语句
        private function __construct(){
            if(!class_exists("PDO")){
                self::throw_exception('没有开启PDO配置，请先开启');
            }
            
            if(!is_array(self::$getDbConfig)){
                self::$getDbConfig=array(
                    'username'=>DB_USER,
                    'password'=>DB_PAW,
                    'hostname'=>DB_HOST,
                    'datename'=>DB_NAME,
                    'dbms'=>DB_TYPE,
                    'dsn'=>DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME
                );
            }
            
            if(empty(self::$getDbConfig['params'])) self::$getDbConfig['params']=array();

            if(!self::$link){
                
                if(self::$pconnect){
                    $getDbConfig['parmas'][constant("PDO::ATTR_PERSISTENT")]=true;//开启长链接
                }
                try{
                    self::$link=new PDO(self::$getDbConfig['dsn'],self::$getDbConfig['username'],self::$getDbConfig['password'],
                        self::$getDbConfig['params']);
                    self::$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                    self::throw_exception($e->getmessage());
                }
                if(!self::$link){
                    $this->throw_exception('PDO连接错误');
                    return false;
                }
                self::$link->exec('set names '.DB_CHARSET);
                self::$connected=true;
            }else{
                return self::$link;
            }
        }


        /*单例模式实例化对象*/
        public static function getInstance(){
            if(!(self::$_instance instanceof self)){
                self::$_instance=new self();
            }
            return self::$_instance;
        }


        /*抛出错误*/
        public function throw_exception($errMsg){
            echo $errMsg;
        }


        /*查的执行*/
        public function getAll($sql=null){
            if($sql!=null){
                $this->query($sql);
            }
            $result=self::$PDOStatement->fetchALL(constant("PDO::FETCH_ASSOC"));
            return $result;
        }


        /*查*/
        public function select($table=null,$front=0,$size=4,$content=null){
            $sql="SELECT * FROM ".$table.$content." LIMIT ".$front." , ".$size;
            
            return $this->getAll($sql);

        }



        /*增*/
        public function insert($table,$files,$values){
            $sql="INSERT IGNORE INTO ".$table.$files." values ".$values;
            return $this->query($sql);
        }

        /*改*/
        public function update($table='?',$now='?',$old='?'){
            $sql="UPDATE ".$table." SET ".$now." WHERE ".$old;
            return $this->query($sql);
        }


        /*删*/
        public function delete($table,$id=null){
            $sql="DELETE FROM ".$table." WHERE ".$id;
            return $this->query($sql);
        }


        /*得到条数*/
        public function getNum($table){
            $sql="SELECT COUNT(*) FROM ".$table;
            return $this->getAll($sql);
        }



        /*释放*/
        public function free(){
            self::$PDOStatement = null;
        }

        
        /*增删改的执行*/
        public function query($sql = ''){
               $link = self::$link;
               if(!$link) return false;
               if(!empty(self::$PDOStatement))self::free();
               self::$queryStr=$sql;
               self::$PDOStatement=$link->prepare(self::$queryStr);
               $res=self::$PDOStatement->execute();
               return $res;
        }
              
        /*关闭数据库连接*/
        public function close(){
            self::$link=null;
        }

    } 


    
  
   
?>