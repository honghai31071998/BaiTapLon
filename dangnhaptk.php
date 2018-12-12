<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ĐĂNG NHẬP</title>
    <style>
        form{
           
        width:400px;
        height:300px;
        display:table;
        padding-top:20px;
       
        background-color:#f1f7fc;
        margin:0px auto;
        box-shadow:1px 1px 5px rgba(0,0,0,0.1);
       
        
        }
        .content{
        width:360px;
        height:280px;
        background-color:#ffffff;;
        margin:0px auto;}
        .form1{
            width:200px;
           padding-top:10px;
            height:30px;
            margin:0px auto;  
            padding-bottom:10px;        
        }
        .form2 {
            width:300px;
           height:50px;
           margin:0px auto;
           background-color:#ffffff;;
        }
        .form21{
            width:300px;
            margin:0px auto;
            background-color:#f1f7fc;;
        }
        .form3{
            width:300px;
            height:50px;
            margin:0px auto;
        }
        .form-sbm{
            width:304px;
            height:25px;
            
        }
        
       
        
        
    </style>
</head>

<body>

    <form action="dangnhap.php" method="post">
        <div class="content">

            <div class="form1">
                <h2 align="center">Đăng nhập</h2>
            </div>
            <br>
            <div class="form2">
                Username:<br> <input class="form21" type="text" name="username"></div>
            <div class="form2">
                Password: <br><input class="form21" type="password" name="password"></div>
            <br>
            <div class="form3">
                <input class="form-sbm"type="submit" value="Login" name="login"></div>
        </div>
    </form>
<?php
$connect=mysqli_connect('localhost','root','','qlthuvien');
if(!$connect)
{
    echo'kết nối thất bại'.mysqli_connect_error();
}

?>
<?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $pass_hash=password_hash($password,PASSWORD_DEFAULT);
    if($username==""||$password=="")
{
    echo"dien day du thong tin";
}
    else
{
        $sql="SELECT  `username`, `matkhau`, `hoten`, `diachi`, `email`, `status` FROM `login` WHERE username=$username and password=$password";
        $kt=mysqli_query($connect,$sql);
        if (mysqli_num_rows($kt) != 0)
        
        {
        echo'tai khoan da ton';

        }
        else
        {
        
        echo'tk chua dang ki';
           
}
}
}
?>


</body>

</html>