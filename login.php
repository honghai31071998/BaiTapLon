<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>QUẢN LÝ THƯ VIỆN</title>
	<link rel="stylesheet" type="text/css" href="css/QLThuVien.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<?php 
$loi=array();
$loi['name']=$loi['pass']=$loi['login']=NULL;
$username=$pass=NULL;
 
  if(isset($_POST['login']))
  {
      //check xem nhaop email chưa;
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
      if($username&&$pass){
           require("connect/config.php");
           
         
         $sql="select * from user where password='$pass' and username='$username'";
          $kq=mysqli_query($conn,$sql);
          $a=mysqli_num_rows($kq);
          if($a == 1){
             $data= mysqli_fetch_assoc($kq);
             //$data=array("id_use"=>"23",......,"level"=>"2")
             $_SESSION['level']=$data['level'];
             if($_SESSION['level']==2)
             {
                 header("location:admin/admin.php");
                 exit();
             }
             else
             {
                 $_SESSION['username']=$username;
                 header("location:QLThuVien.php");
                 exit();
          }
        }
          else
          {
          
         
              $loi['login']='*Email hoặc Password sai';
          }
          mysqli_close($conn);
        }
      
    }
?>
<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<img src="img/imgsach.jpg" width="250px;"></div>
			<div id="slogan">
				<div id="search">
					<div id="search-box" style="display: none;">
						<input class="search-box-input" type="text" name="timkiem" value="Tìm kiếm"></input>
						<button class="icon-search"><i class="fas fa-search"></i></button>
					</div>
				</div>
				<div id="ab"> <h2><i>Website Quản Lý Thư Viện</i></h2> 
				</div>
			</div>
			<div id="abc">
				<button type="button"><a href="login.php">Login</a></button>
				<a href="dangki.php">Sign up</a>
			</div>
		</div>
		<!--header-->
		<div id="Menu">
			<ul>
				<li><a href="QLThuVien.php">Trang Chủ</a></li>
				<li><a href="GioiThieu.html">Giới Thiệu</a></li>
				<li><a href="Giaotrinh.php">Giáo Trình</a></li>
				<li><a href="Truyen.php">Truyện</a></li>
				<li><a href="#">Liên Hệ</a></li>
			</ul>
		</div>
		<!--menu-->
	
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
        <div id="container-content" style="padding-top:30px; height:600px; ">
        <div class="container-left">
    
                <fieldset style="width:290px;height:170px; margin:50px 240px 60px 240px ;">
                    <legend style="margin-left:30px;">Login</legend>
                    <form action="login.php" method="post">
                        <table>
                            <tr>
                                <td> Username</td>
                                <td><input type="text" size="25" name="txtname"></td><br>
                            </tr>
                            <tr>
                                <td> Password</td>
                                <td><input type="password" size="25" name="txtpass"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Login" name="login"></td>
                            </tr>
                        </table>
                    </form>

                </fieldset>
                <div style='width:350px;height:170px;margin:10px auto;text-align:center;color:red'>
                   <?php
                  
                    echo $loi['name'];
                    echo $loi['pass'];
                    echo $loi['login'];

                    ?>
            </div>
            
        </div>
        <div class="container-right">
           
            <div class="panel-news">
					<img src='img/hotrott.png' style="width:220px;">
				</div>
            </div>
        </div>

    </div>
    <div id="Footer">
        <p>Website - Quản Lý Thư Viện @2018</p>
    </div>
    <!--Footer-->
    </div>

</body>

</html>
    