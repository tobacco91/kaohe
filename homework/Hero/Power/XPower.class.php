<?php
namespace Hero\Power;
     
     class XPower{
       
       protected $attack = "X"; // X不得超过10
       protected $recycle = 1;
       private static $_instance=null;
       /* 随机化字符串，可以测试你的实例化对象是否已经静态化 */
       public $random = "aaa";
       
       public static function run() {

       	if(!(self::$_instance instanceof self)){
                self::$_instance=new self();
            }
            return self::$_instance;
      	/*
          * 返回当前类的实例化对象
          * 请使用单例模式
          * @link http://www.phptherightway.com/pages/Design-Patterns.html
          * @link http://dwtedx.com/itshare_355.html
          * 关于单例模式的好处，请自行了解
          */
       }
       
     }