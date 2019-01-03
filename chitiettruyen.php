<?php
    session_start();
    $id=$_GET["id"];
?>
<?php
include("modules/header.php");
?>

    <!--Sidebar-->
    <div id="container">
        <div class="container-left">
            <div class="block1">
                <div class="box-common">
                    <div class="heading">
                        <h4 class="box-title" style="width: 75%"> THÔNG TIN TRUYỆN</h4>
                    </div>
                </div>
                <div class="border3">
                <?php 
                    require("connect/config.php");
                    $sql="select truyen.hinhanh,truyen.tentruyen,truyen.tacgia,truyen.nhaxb,truyen.namxb,truyen.mota ,theloaitruyen.TenTL from theloaitruyen, truyen 
                    where theloaitruyen.id_TL=truyen.id_TL and truyen.id=$id";
                    $result=mysqli_query($conn,$sql);
                    $data=mysqli_fetch_assoc($result);
                    echo"<div class='border21'>";
                        echo"<div class='border21-left'>";
                        echo"<img src='connect/images/$data[hinhanh]' style='height:247px;'>";
                        echo"</div>";
                        echo"<div class='border21-right'>";
                           
                            echo"<h2>$data[tentruyen]</h2>";
                            echo"<p>Tác giả: $data[tacgia]<br>";
                                echo"NXB: $data[nhaxb]<br>";
                                echo"Năm: $data[namxb]<br>";
                                
                                echo"Phân loại sách:$data[TenTL]</p>";
                        echo"</div>";
                    echo"</div>";
                    echo"<p>$data[mota] <p>";
                    echo"<button type='button' style='float:right;color:red;'  name='muonsach'>Mượn Sách</button>";
                    ?>
                </div>
                
            </div>
        </div>
        <div class="container-right">
				<div class="panel-news">
					<img src='img/hotrott.png' style="width:220px;">
				</div>
			</div>
		</div>
	</div>
		</div>
        </div>
        <div style="clear:left;"></div>
    <div id="Footer"style="margin-top:100px;">
        <p>Websize - Quản Lý Thư Viện @2018</p>
    </div>
    <!--Footer-->
    </div>

</body>

</html>