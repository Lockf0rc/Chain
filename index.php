<?/*{"FILENAME":"index.php","TYPE":"HTML POST",DATAHANDELER:"InsertData.php"*/?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="help.css" rel="stylesheet" type="text/css">
<title>Help Desk Data Entry and Update</title>
</head>
<body>
	<h2>Help Desk Data Entry</h2>
	<form action="InsertData.php" method="post" name="dataentry">
		Enter Query Chain Value(q1...qx)<br/>
		<input type="text" name="chain" size="3">
		<p>
		Enter Help Information <br/>
		<textarea name="responce" rows="8" cols="24"></textarea>
		</p>
		<input type="submit" value="Enter data into table" name="send">
	</form>
</body>
</html>