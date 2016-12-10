<!DOCTYPE html>
<html>
<head>
    <title>add</title>
	<meta charset="utf-8">
</head>
<body>
    <center>
	    <h3>添加学生</h3><br>
        <form action="systemAction.php?action=add" method="post">
		    <table>
			    <tr> 
				    <th>姓名</th>
					<td><input type="text" name="name"/></td> 
				</tr>
				<tr> 
				    <th>性别</th>
					<td>
					    <input type="radio" name="sex" value="m"/>男
					    <input type="radio" name="sex" value="f"/>女
					</td> 
				</tr>
				<tr> 
				    <th>年龄</th>
					<td><input type="text" name="age"/></td> 
				</tr>
				<tr>
				    <td></td>
				    <td>
					    <input type="submit" value="提交"/>
					    <input type="reset" value="重置"/>
					</td>
				</tr>
			</table>
		</form>
    </center>
</body>
</html>