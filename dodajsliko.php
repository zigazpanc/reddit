<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$db = mysqli_connect('localhost', 'root', '', 'reddit');
		if(isset($_POST['submit_image'])){
			$name = $_FILES['myfile']['name'];
			$type = $_FILES['myfile']['type'];
			$data = file_get_contents($_FILES['myfile']['tmp_name']);
			$query = 'INSERT INTO `slike`( `user_id`, `ime`, `slika`) VALUES (?,?,?)'
		}
	?>
	<form method="POST" enctype="multipart/form-data">
 		
		<a>Name</a><input type="text" name="besedilo">
		<input type="file" name="myfile">
 		<input type="submit" name="submit_image" value="Upload">
	</form>
	
</form>
</body>
</html>