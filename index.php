<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Py.css">
	<style type="text/css">
		* {
			padding: 4px;
		}
		.centerElement{
			position: fixed;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}
		.centerElement form input{
			outline: none;
			border: none;
			border-bottom: #e1e1e1 2px solid;
			font-size: 1.2rem;
			background: none;
			color: #000;
		}
		.centerElement form input[type="submit"]{
			margin-top: 10px;
			font-size: 1.4rem;
			border: #e1e1e1 2px solid;
			padding: 2px 20px;
			border-radius: 5px;
		}
		.centerElement form input[type="submit"]:hover{
			background: #e1e1e1;
		}
		.centerElement form{ margin-left: 5px; text-align: center;}
	</style>

	<title>❤️ Em có yêu anh không? </title>
</head>

<body>
	<?php
		if(isset($_POST["lname"])){
			header('location: ./ecyak.php');
		}
	?>
	<div class="centerElement">
		<form method="POST" id="ten">
			<input type="text" id="lname" name="lname" placeholder="Em tên gì...?"><br>
			<input type="submit" value="OK">
		</form>
	</div>
</body>
<script src="Py.js"></script>
<script src="Home.js"></script>
</html>