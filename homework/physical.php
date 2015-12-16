<!DOCTYPE htm8l>
<html>
	<head>
	    <meta charset="utf-8">
		<title>physical</title>
	</head>
	<body>
		一个小球初速度为0，从10m高的楼层上竖直向下抛，问经过多久落地？（g=10m/s^2）
		<?php 
			class One{
				const g=10;
				public $t;
				public $s;
				function displancement(){
					$s=$this->s;
					$t=$this->t;
					$g=self::g;
					$t=sqrt(2*$s/$g);
					echo '时间是'.$t;
				}
			}
			$one=new One;
			$one->s=10;
            $one->displancement();
		?>
		<hr/>
	     某小车以加速度a=2m/s^2向前运行4s，求位移是多少？
	     <?php
	     	class Two{
	  	     		function __construct($a,$t){
	     			$s=0.5*$a*$t*$t;
	     			echo '位移为'.$s;
	     		}
	     	}
	     	$two=new Two(2,4);
	     ?>
	     <hr/>
	    某人提着2kg的物体，向下走了5m,求重力做功为多少？
	    <?php
	    	class Three{
	   			static $m;
	   			static $h;
	   			static $w;
	    		const g=10;
	    		static function acting(){
	    			$w=static::$w;
	    			$m=static::$m;
	    		    $h=static::$h;
	    			$g=self::g;
	    			$w=$m*$g*$h;
	    			echo $w;
	    		}
	    	}
	    	Three::$m=2;
	    	Three::$h=5;
	    	Three::acting();
	    ?>
	</body>
</html>
