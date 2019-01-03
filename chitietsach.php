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
                        <h4 class="box-title" style="width: 75%"> THÔNG TIN SÁCH</h4>
                    </div>
                </div>
                <div class="border3">
                <?php 
                    require("connect/config.php");
                    $sql1="select sach.id, sach.hinhanh,sach.tensach,sach.tacgia,sach.nhaxb,sach.namxb,sach.mota ,ploaigt.phanloai from ploaigt, sach 
                    where ploaigt.pl_id=sach.pl_id and sach.id=$id";
                    $result1=mysqli_query($conn,$sql1);
                    $data1=mysqli_fetch_assoc($result1);
                    echo"<div class='border21'>";
                        echo"<div class='border21-left'>";
                        echo"<img src='connect/images/$data1[hinhanh]' style='height:247px;'>";
                        echo"</div>";
                        echo"<div class='border21-right'>";
                           
                            echo"<h2>$data1[tensach]</h2>";
                            echo"<p>Tác giả: $data1[tacgia]<br>";
                                echo"NXB: $data1[nhaxb]<br>";
                                echo"Năm: $data1[namxb]<br>";
                               
                                
                                echo"Phân loại sách:$data1[phanloai]</p>";
                        echo"</div>";
                    echo"</div>";
                    echo"<p>$data1[mota] <p>";
                    echo"<button type='button' style='float:right;color:red;' name='muonsach'><a href='muon_sach.php?id=$data1[id]'>Mượn Sách</a></button>";
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