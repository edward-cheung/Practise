<!DOCTYPE html>
<html>
<head>
    <title>edit</title>
	<meta charset="utf-8">
</head>
<body>
    <center>
	    <h3>修改信息</h3><br>
		<?php 
        try{
	        $pdo=new PDO("mysql:host=localhost;dbname=test","root","");
        }catch(PDOException $e){
	        die("failed".$e->getMessage());
        }
		$result=$pdo->query("select * from stu where id=".$_GET['id']);
		if($result->rowCount()){
			$stu=$result->fetch(PDO::FETCH_ASSOC);
		}else{
			echo "failed";
		}
		?>
        <form action="systemAction.php?action=edit" method="post">
		<input type="hidden" name="id" value="<?php echo $stu['id'];?>"/>
		    <table>
			    <tr> 
				    <th>姓名</th>
					<td><input type="text" name="name" value="<?php echo $stu['name'];?>"/></td> 
				</tr>
				<tr> 
				    <th>性别</th>
					<td>
					    <input type="radio" name="sex" value="m"<?php echo ($stu['sex']=="m")?"checked":"";?>/>男
					    <input type="radio" name="sex" value="f"<?php echo ($stu['sex']=="f")?"checked":"";?>/>女
					</td> 
				</tr>
				<tr> 
				    <th>年龄</th>
					<td><input type="text" name="age" value="<?php echo $stu['age'];?>"/></td> 
				</tr>
				<tr>
				    <td></td>
				    <td>
					    <input type="submit" value="修改"/>
					    <input type="reset" value="重置"/>
					</td>
				</tr>
			</table>
		</form>
    </center>
</body>
</html>