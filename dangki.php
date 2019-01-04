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
    $username=$email=$pass=$day=$month=$year=$gioitinh=$kt=$a=$conn=NULL;
    $loi['username']=$loi['txtemail']=$loi['txtpass']=$loi['day']=$loi['gioitinh']=$loi['month']=$loi['year']=$loi['dangki']=$loi['conn']=NULL;
    if(isset($_POST['login']))
    {
        if(empty($_POST['txtname']))
        {
            $loi['username']="*Xin vui lòng nhập Username<br>";
        }
        else
        {
            $username=$_POST['txtname'];
        }
        if(empty($_POST['txtemail']))
        {
            
            $loi['txtemail']="*Xin vui lòng nhập Email<br>";
        }
        else
        {
            $email=$_POST['txtemail'];
        }
        if(empty($_POST['txtpass']))
        {
            
            $loi['txtpass']="*Xin vui lòng nhập password<br>";
        }
        else
        {
            $pass=md5($_POST['txtpass']);
        }
        if(($_POST['day']=='ngay'))
        {
            $loi['day']='*xin vui lòng nhập  ngày sinh<br>';
        }
        else
        {
            $day=$_POST['day'];
            
        }
        if(($_POST['month']=='thang'))
        
        {
            $loi['month']='*xin vui lòng nhập tháng sinh<br>';
        }
        else{
            $month=$_POST['month'];
        }
        if(($_POST['year']=='nam'))
        {
            $loi['year']='*xin vui lòng nhập năm sinh<br>';
        }
        else{
            $year=$_POST['year'];
        }

        if(empty($_POST['gioitinh']))
        {
            $loi['gioitinh']='*xin vui lòng điền giới tính của bạn<br>';
        }
        else{
            $gioitinh=$_POST['gioitinh'];
        }

        if($username&&$pass&&$email&&$day&&$month&&$year&&$gioitinh)
         { require("connect/config.php");
           
               
               $sql="select * from user where  email='$email'";
                $kt=mysqli_query($conn,$sql);
                $a=mysqli_num_rows($kt);
                if($a > 0){
                
                    $loi['dangki']='*email đã có người đăng kí';
                }
                else
                {
                
                $sql1="INSERT INTO user(username,email,password,ngaysinh,gioitinh,level) 
                    VALUES('$username','$email','$pass','$year-$month-$day','$gioitinh','1')";
                        mysqli_query($conn,$sql1);
                    $loi['dangki']='đăng kí thành công,<a href="login.php">Login</a>';
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
	<!--Sidebar-->
    <div id="container-content" style="padding-top:30px; height: 700px;">
        <div class="container-left">
           
                <fieldset style="width:290px;height:200px; margin:0px 240px 60px 240px ;">
                    <legend style="margin-left:30px;">Đăng kí</legend>
                    <form action="dangki.php" method="post">
                        <table>
                        <tr>
                                <td> Username</td>
                                <td><input type="text" size="25" name="txtname"></td>
                            </tr>
                            <tr>
                                <td> Email</td>
                                <td><input type="text" size="25" name="txtemail"></td>
                            </tr>
                            <tr>
                                <td> Password</td>
                                <td><input type="password" size="25" name="txtpass"></td>
                            </tr>
                            <tr>
                                <td> Ngày sinh</td>
                                <td>
                                <select name="day">
                                    <option value='ngay'>ngay</option>
                                    <?php
                                        for($i=1;$i<=31;$i++)
                                        {
                                            echo"<option value='$i'>$i</option>";
                                        }
                                    ?>
                                    </select>
                                     <select name='month' >
                                    <option value='thang'>thang</option>
                                    <?php
                                        
                                        for($m=1;$m<=12;$m++)
                                        {
                                            echo"<option value='$m'>$m</option>";
                                        }
                                    ?>
                                    </select>
                                     <select name='year' >
                                    <option value='nam'>nam</option>
                                    <?php
                                       for($j=1970;$j<=date('Y');$j++)
                                        {
                                            echo"<option value='$j'>$j</option>";
                                        } 
                                    ?>
                                    </select>
                                </td><br>
                            </tr>
                             <tr>
                                <td> giới tính </td>
                                <td><input type="radio" value="1" name="gioitinh">Nam
                                    <input type="radio" value="2" name="gioitinh">Nữ
                                                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="đăng kí" name="login"></td>
                            </tr>
                        </table>
                    </form>

                </fieldset>
                <div style='width:350px;height:170px;margin:10px auto;text-align:center;color:red'>
                   <?php
                    echo $loi['username'];
                    echo $loi['txtemail'];
                    echo $loi['txtpass'];
                    echo $loi['day'];
                    echo $loi['gioitinh'];
                    echo $loi['year'];
                    echo $loi['month'];
                    echo $loi['conn'];
                    echo $loi['dangki'];

                    ?>
            </div>
        </div>
        <div class="container-right">
            <div class="panel-news">
					<img src='img/hotrott.png' style="width:220px;">
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
    