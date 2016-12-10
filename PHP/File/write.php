<?php
//print_r($_POST);

/*php打开文件*/
$f=fopen('./msg.txt','a');
//fwrite($f,"from php into txt.");
$str=$_POST['title'].','.$_POST['content'];
fwrite($f,$str."\n");
fclose($f);
echo 'ok';
?>