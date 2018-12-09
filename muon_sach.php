<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>Mượn sách</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
	<center>
		<div class="form-signin" style="width: 30%;">
			<form action="" method="POST">
				<h2 class="text-center">Đăng kí mượn sách</h2>       
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username" required="required" name="myusername" width="50%">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" required="required" name="mypassword">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Email" required="required" name="myemail">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block" name="submit">Mượn sách</button>
				</div>      
			</form>
		</div>
	</center>
</body>
</html>

<center><h3>
<?php 
include 'connection.php';
if (isset($_POST['submit'])) {
	$myusername=$_POST['myusername'];
	$mypassword=$_POST['mypassword'];
	$myemail = $_POST['myemail'];
	if(is_null($myusername) || is_null($mypassword) || is_null($myemail)) {
		echo("Không được để trống");
	} else {
		$sql="SELECT * FROM user WHERE username='$myusername' and password='$mypassword' and email = '$myemail'";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);		
	}
	if($count==1){
		echo "Mượn sách thành công";
	}
	else {
		echo "Sai thông tin! Mời bạn nhập lại.";
	}
}

?></center></h3>