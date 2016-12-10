<?php
class People{
	public function __construct($age,$name,$sex){
		$this->_age=$age;
		$this->_name=$name;
		$this->_sex=$sex;
		
		People::$NUM++;
		if(People::$NUM>People::MAX_People_NUM){
			throw new Exception("不能创建更多的人");
		}
	}
	public function getAge(){
		return $this->_age;
	}
	public function getName(){
		return $this->_name;
	}
	public function getSex(){
		return $this->_sex;
	}
	public function hi(){
		echo $this->_name.' say hi';
	}
	private $_age,$_name,$_sex;
	
	private static $NUM=0;
	
	const MAX_People_NUM=100;
	
	public static function sayHello(){
		echo 'Hello People';
	}
}
?>