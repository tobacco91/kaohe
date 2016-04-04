<?php
	interface ifactory{
		public static function newObject($type);
	}
	interface getValue{
		public function getValue($num1,$num2);		
	}



	class cfactory implements ifactory{
		public static function newObject($type){
			switch ($type) {
				case '+' :
					return new oprationAdd();
					break;
				case '-' :
					return new oprationSubtract();
					break;
				case '*' :
					return new oprationMultiply();
					break;
				case '/' :
					return new oprationDivide();
					break;
			}
		}

	}



	class oprationAdd implements getValue{
		public function getValue($num1,$num2){
			echo $num1+$num2;
		}
	}



	class oprationSubtract implements getValue{
		public function getValue($num1,$num2){
			echo $num1-$num2;
		}
	}

	class oprationMultiply implements getValue{
		public function getValue($num1,$num2){
			echo $num1*$num2;
		}
	}

	class oprationDivide implements getValue{
		public function getValue($num1,$num2){
			echo $num1/$num2;
		}
	}

	// $mean = cfactory::newObject('+');
	// $mean->getValue(1,2);
?>