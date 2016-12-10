<?php
//encode
$arr=array(1,2,5,8,'hello','yida',array('h'=>'hello','name'=>'yida'));
//print_r($arr);
echo json_encode($arr).'<br>';

$obj=array('h'=>'hello','w'=>'world',array(3,2,1));
echo json_encode($obj).'<br>'; 

//decode
$jsonStr='{"h":"hello","w":"world","0":[3,2,1]}';
$obj=json_decode($jsonStr);
//print_r($obj);
echo $obj->h;