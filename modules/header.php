<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>QUẢN LÝ THƯ VIỆN</title>
	<link rel="stylesheet" type="text/css" href="css/QLThuVien.css">
	<link rel="stylesheet" type="text/css" href="css/giaotrinh.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<img src="img/imgsach.jpg" width="250px;">
			</div>
			<div id="slogan">
				<div id="search"type="hidden" >
					<div id="search-box"style="display:none">
						<input class="search-box-input" type="text" name="timkiem" value="Tìm kiếm"></input>
						<button class="icon-search"><i class="fas fa-search"></i></button>
					</div>
				</div>
				<div id="ab"> <h2><i>Websize Quản Lý Thư Viện</i></h2> 
				</div>
			</div>
			<div id="abc">
                <?php
                if(isset($_SESSION['username']))
                {
                    echo"<img src='img/use.jpg'style='width:20px;'>". $_SESSION['username'].",<button type='button'><a href='logout.php' >Log out</a></button>";
                }
                else
                {
                    echo"<button type='button'><a href='login.php'>Login</a></button>";
              echo"  <a href='dangki.php'>Sign up</a>";
            }
                ?>
			</div>		
		</div>
		<!--header-->
		<div id="Menu">
			<ul>
				<li><a href="QLThuVien.php">Trang Chủ</a></li>
				<li><a href="GioiThieu.html">Giới Thiệu</a></li>
				<li><a href="Giaotrinh.php">Giáo Trình</a></li>
				<li><a href="Truyen.php">Truyện</a></li>
			
				<li><a href="#">Liên hệ</a></li>
			</ul>
		</div>
	
	<!--wrapper-->
	<div id="slider">
		<figure>
			<img src="img/imgsach3.jpg" width="́60px" height="400px">
			<img src="img/imgsach2.jpg" width="́60px" height="400px">
			<img src="img/imgsach1.jpg" width="́60px" height="400px">
			<img src="img/imgsach4.jpg" width="́60px" height="400px">
			<img src="img/imgsach5.jpg" width="́60px" height="400px">
		</figure>
	</div>
	<!--Sidebar-->