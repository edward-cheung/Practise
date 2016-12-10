<?php
//echo phpinfo(); 查看开启的方法
//单态类（目的是为了产生唯一的对象）
/* class A{
	private static $a=null;
	private function __construct(){}
	
	static function makeA(){
		if(self::$a==null){
			self::$a=new self();
		}
		return self::$a;
	}
}
print_r(A::makeA()); */

//$mysqli=new mysqli("localhost","user","password","dbname");
try{
	$pdo=new PDO("mysql:host=localhost;dbname=test","root","");
	//$pdo=new PDO("uri:mysqlPdo.ini","root","");
	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
}catch(PDOException $e){
	die("failed".$e->getMessage());
}
echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);
//print_r($pdo);