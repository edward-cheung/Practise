<?php
//变量名：数字、字母和_组成，不能用数字开头
$_='yida\'zhang';
echo $_,'<br/>';
echo '<br/>';

/*转义：在单引号中，只认识两个转义，\' => ',\\ => \;
        在双引号中，可以转义更多字符
*/
$str="hello \" world";
echo $str;
echo "<br/>";
$str='hello \" \' \\ world';
echo $str,'<br/>';
echo '<br/>';

//字符串拼接，不能用双引号表示字符串
$str1='hello ';
$str2='world';
$str=$str1.$str2;
echo $str,'<br/>';
echo '<br/>';

//数组
$arr=array('001'=>'张三','h'=>'yida','006'=>'abc');
print_r($arr);
echo $arr['h'];
?>