
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>Mượn sách</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<?php 
$loi=array();
$loi['name']=$loi['pass']=$loi['id']=NULL;
$username=$pass=$email=NULL;

if (isset($_GET['id'])) {
	$id=$_GET["id"];
}
else $id = "";

if (isset($_POST['submit'])) {
 if(empty($_POST["id"])) {
	$loi['id']="*ID không hợp lệ</br>";
 }
 else {
	$id=$_POST["id"];
 }
 if(empty($_POST['txtname']))
 {
	 $loi['name']="*Bạn chưa nhập Tài Khoản</br>";
 }
 else{
	 $username=$_POST['txtname'];
 }
 if(empty($_POST['txtpass']))
 {
   $loi['pass']="*Bạn chưa nhập password";
 }
 else{
	 $pass=md5($_POST['txtpass']);
 }
 if(empty($_POST['txtemail']))
 {
   $loi['email']="*Bạn chưa nhập email";
 }
 else{
	 $email=$_POST['txtemail'];
 }
 if($username&&$pass&&$email&&$id){
	  require("connect/config.php");
		$sql="SELECT * FROM user WHERE username='$username' and password='$pass' and email = '$email'";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);		
	if($count==1){
		$sql1="INSERT INTO `dkmuonsach`(`username`,`email`, `id`)
		 VALUES ('$username','$email','$id')";
		mysqli_query($conn,$sql1);
		
	}
	else {
		echo "Sai thông tin! Mời bạn nhập lại.";
	}

}
}
?>
<body>
	<center>
		<div class="form-signin" style="width: 30%;">
			<form action="muon_sach.php" method="post">
				<h2 class="text-center">Đăng kí mượn sách</h2>      
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username" required="required" name="txtname" width="50%">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" required="required" name="txtpass">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Email" required="required" name="txtemail">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block" name="submit">Mượn sách</button>
				</div>  

			</form>
			<div style='width:350px;height:170px;margin:10px auto;text-align:center;color:red'>
                   <?php
                  
                    echo $loi['name'];
					echo $loi['pass'];
					echo $loi['id'];
                  
                    ?>
		</div>

	</center>
</body>
</html>

