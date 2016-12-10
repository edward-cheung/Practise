<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
require_once '3.php';
/*
$m=new People(19,"yida",'女'); 
echo $m->getName();
*/

//People::sayHello();

/*
for($i=0;$i<200;$i++){
	new People(19,"yida",'女');
}
*/

$m=new Man(19,"yida");
$m->hi();
?>
</body>
</html>