<?php
    session_start();
?>
<?php
include("modules/header.php");
?>

	<div id="container-content">
		<div class="location">
			<h3 class="title1"style="text-align:center;">GIỚI THIỆU SÁCH MỚI</h3>
			<div class="container">
			<?php
			include('modules/show.php');
			?>
			</div>
		</div>
		<div class="location2">
			<div class="container-left">
				<div class="block1">
					<div class="box-common">
						<div class="heading">
							<h4 class="box-title" style="width: 75%">TRUYỆN MỚI</h4>
						</div>
					</div>
					<div class="border">
					<?php
					 require('connect/config.php');
					 $sql="select * from truyen order by  id desc limit 0,3";
					 $result=mysqli_query($conn,$sql);
					 while($data=mysqli_fetch_assoc($result))
						{echo"<div class='border-col'><a href='chitiettruyen.php?id=$data[id]'>
							<img class='border-col-img' style='height:150px;padding-left:5px;' src='connect/images/$data[hinhanh]' >
				<h5 style='height:45px;'>$data[tentruyen]</h5>";echo"</div>";}
				mysqli_close($conn);?>
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
		
		<div style="clear:left;"></div>
	<div id="Footer"style="margin-top:100px;">
		<p>Website - Quản Lý Thư Viện @2018</p>
	</div>
	<!--Footer-->
	</div>

</body>

</html>