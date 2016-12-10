<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>文件操作</title>
</head>
<body>
<?php
//write data
/* $f=@fopen('data','w');
if($f){
	fwrite($f,'hello world');
	fclose($f);
    echo 'ok';
}else{
	echo '创建文件失败';
} */

//read data
/* $f=@fopen('data','r');
while(!feof($f)){
	$content=fgets($f);
	echo $content;
}
fclose($f); */

//get content
echo file_get_contents('data');
?>
</body>
</html>