<?php

    class route{
        private $method = null;//请求方法
        private $config = null;//保存路径
        private $moudle;//模块名
        private $controller;//控制器名
        private $action;//方法名

        public function __construct(){
            $this->get_methods();
            $this->get_all();
            $this->get_parameter();
            $this->run();
        }



        //得到传递的方法和内容
        private function get_methods(){
            
            if($_SERVER['REQUEST_METHOD'] == 'post'){
                $this->method = 'post';
                $this->config = $_POST;
            }
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                $this->method = 'get';
                $this->config = $_GET;
            }
        }








        //得到各个参数
        private function get_all(){
            $this->moudle = array_key_exists('m', $this->config) ? $this->config['m'] : 'home';
            $this->controller = array_key_exists('c', $this->config) ? $this->config['c'] : 'index';
            $this->action  = array_key_exists('a', $this->config) ? $this->config['a'] : 'index';
        }

    



        //除去moudle controller action 只留方法的参数
        private function get_parameter(){

            unset($this->config['m']);
            unset($this->config['c']);
            unset($this->config['a']);
           
        }




        //载入
        private function run(){
            $path = $this->moudle.'/controller/'.$this->controller.'Controller.php';
            echo $path;
            if(file_exists($path)){
                require_once $path;
                $obj = new $this->controller;
                call_user_func_array([$obj,$this->action],$this->config);

            }else{
                throw new Exception('没有对应控制器>.<~');
            }
        }

    }

    

?>