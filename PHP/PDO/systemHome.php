<! DOCTYPE html>
<html>
<head>
    <title>pdoDemo</title>
    <meta charset="utf-8">
	<script>
	    function doDel(id){
			if(confirm("Are you sure?")){
				window.location='systemAction.php?action=del&id'+id;
			}
		}
	</script>
</head>
<body>
    <center>
	    <h1>学生信息管理系统</h1>
		<hr>
		<h3>浏览信息 <a href="systemAdd.php">添加学生</a></h3>
		<table width="600" border="1">
        <tr>
		    <th>学号</th>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>操作</th>
		</tr>
	    <?php
		try{
		    $pdo=new PDO("mysql:host=localhost;dbname=test","root","");
		}catch(PDOException $e){
			die("failed".$e->getMessage());
		}
		$result=$pdo->query("select * from stu");
		foreach($result as $row){
			echo "<tr>";
		    echo "<td>{$row['id']}</td>";
			echo "<td>{$row['name']}</td>";
			echo "<td>{$row['sex']}</td>";
			echo "<td>{$row['age']}</td>";
			echo "<td>
			        <a href='systemEdit.php?id={$row['id']}'>修改</a>
				    <a href='javascript:doDel({$row['id']})'>删除</a>
					<a href='systemAction.php?action=del&id={$row['id']}'>删除</a>
				  </td>";
			echo "</tr>";
		}
		
		?>
		</table>		
    </center>
</body>
</html>
