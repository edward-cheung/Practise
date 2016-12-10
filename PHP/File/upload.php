<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Image</title>
</head>
<body>
<?php
$file=$_FILES['file'];
$fileName=$file['name'];
move_uploaded_file($file['tmp_name'],$fileName);
echo "<img src='$fileName'>" ;
?>
</body>
</html>