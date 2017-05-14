
<?php
    session_start();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Đăng nhập </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="style.css">     
</head>

<body>
	<?php
		require("../modules/header.php");
	?>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<?php
					require("../app/database.php");
					$result = $conn->query("SELECT * FROM bills WHERE `done` = 0");
					if ($result->num_rows > 0) {
						while($data = $result->fetch_assoc()) {
							echo $data['billcontent'];
						}
					} 
					else echo "<h3><br><br>Hiện không có đơn hàng nào</h3>";
				?>
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
</body>

</html>