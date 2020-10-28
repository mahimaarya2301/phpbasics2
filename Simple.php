<?php
	//Class Declaration
	class Simple{
		//1.Property
		
		//2.Constructor
		public function __construct(){
			echo 'Hello from constructor';
			echo '<br>';//break line
		}
		
		//3.Method
		public function a1(){
			echo 'Hello from a1 method';
		}
	}
	//Create an object of the class
	$obj = new Simple();
	//Access the member using -> member selection operator
	$obj->a1();

?>