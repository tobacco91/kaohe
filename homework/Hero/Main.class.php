<?php
namespace Hero;
include './Auto_load.php';
$init=new autoload(array(
	'Hero/Arms/' =>'arm_name.class.php',
	'Hero/Power/' => 'Xpower.class.php'
	));
$init->core();

use  Hero/Arms/arm_name;
use  Hero/Power/XPower as X;

abstract class Main {
     
       /* 血量 */
       private 	$health = 100;
       /* 装备 */
       private	$army =array();
       /* 能力 */
       private	$x = null;
       
       /* 姓名 */
       protected $name = '';
       /* 攻击力 */
       protected $attack = 10;
       /* 防御力 */
       protected $defence = 5;
     
       abstract public function run(
         /*  */
       );
     
       public function equip(
       		$arm_name=Hero\Arms\arm_name::run();
       		$army=array(
       			'arm-name' => ($a)
       			);
       		$this->x=X::run();
         /* 
          * 在这里你需要调用ARM-NAME和XPower的run方法
          * 同时将返回的实例化对象保存在$army和$x下。
          * @example $army = ['ARM-NAME' => (class), ...]
          * $x = (class);
          */
       );
     
       abstract public function attack(
       	/*  */
       );
     
       abstract public function defend();
     
       public function __call() {
       	throw new InvalidArgumentException;
       }
     
       public function __toString() {
       	return 'Hero Name: ' . $this->name . \
           ' Attack: ' . $this->attack . ' Defence: ' . \
           $this->defence;
       }
     }


 ?>