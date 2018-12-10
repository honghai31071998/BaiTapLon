<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ĐĂNG KÍ</title>
    <style>
        form{
           
        width:500px;
        height:400px;
        display:table;
        padding:20px 10px 20px 10px;
       
        background-color:#f1f7fc;
        margin:0px auto;
        box-shadow:1px 1px 5px rgba(0,0,0,0.1)
        
        }
        .content{
        width:460px;
        height:360px;
        background-color:#ffffff;;
        margin:0px auto;}
        .container{
            width:400px;
            padding:0px 20px 0px 20px;
            height:330px;
            margin:0 auto;
            

        }.form-text{
            width:400px;
            height:30px;
            padding-top: 5px;
            
        }
        .form-group{
            width:400px;
           padding-top:10px;
            height:20px;
            padding-bottom:20px;        
        }
        
        .form-input {
            width:400px;
           height:20px;
           margin:0px auto;
           background-color:#f1f7fc;;
        }
        .already{
            display: block;
            text-decoration: none
        }
        .form-sbm{
            background-color:rgb(244,70,106);
            width:404px;
           height:26px;
           margin:0px auto;
          
        }
        
       
        
        
    </style>
</head>

<body>

    <form action="dangkitk.php" method="post">
        <div class="content">
            <div class="container">
                <div class="form-text">
                    <h2 align="center">Đăng kí</h2>
                </div>
                <div class="form-group">
                    Username:<br> <input class="form-input" type="text" name="username"></div>
                <div class="form-group">
                    E-mail: <br><input class="form-input" type="text" name="email"></div>
                <div class="form-group">
                    Password: <br><input class="form-input" type="password" name="password"></div>
                <div class="form-group">
                    Password-repeat: <br><input class="form-input" type="password" name="confirm"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" />I
                            agree to the license terms.</label></div>
                </div>
                <div class="form-group">
                    <input class="form-sbm" type="submit" value="Đăng Kí"name='signin'></div>
                    <a href="dangnhaptk.html" class="already" align="center">You already have an account? Login here.</a>
            </div>
        </div>
 </form>

<?php
$connect=mysqli_connect("localhost","root","","thuvien");
if(!$connect){
    echo'kết nối thất bại'.mysqli_connect_error();
}
?>
<?php

if(isset($_POST['signin']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    $hash_pass=password_hash($password,PASSWORD_DEFAULT);
    $hash_pass1=password_hash($confirm,PASSWORD_DEFAULT);
    if($username==""||$password==""||$confirm==""||$email=="")
    {
        echo'bạn phải điền đầy đủ thông tin';

    }
    else{
        if($password!=$confirm)
        {
            echo'mật khẩu nhập lại không trùng khớp,vui lòng nhập lại';

        }
        else
        {
            $sql="select * from login where username='$username' and email='$email";
                    $kt=mysqli_query($connnect, $sql);
                    if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
                    }
                    else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql1 = "INSERT INTO login(
	    					username,
	    					password,
	    					confirm,
						    email
	    					) VALUES (
	    					'$username',
	    					'$hash_pass',
						    '$hash_pass1',
	    					'$email'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($connect,$sql1);
				   		echo "chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	

        }
    }

?>
</body>

</html