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
						<div class="border-col"><a href="#"><img class="border-col-img" style="height:150px;padding-left:5px;" src="img/img_10.jpg " >
					<h5 style="height:45px;">Đại gia Gatsby</h5></div>
						<div class="border-col"><a href="#"><img class="border-col-img" style="height:150px;" src="img/img_14.jpg " >
						<h5 style="height:45px;">Đi tìm thời gian đã mất</h5></div>
						<div class="border-col"><a href="#"><img class="border-col-img" style="height:150px;" src="img/img_13.jpg " >
						<h5 style="height:45px;">Truyện ngắn của Anton Chekhov</h5></div>
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
	<div id="Footer">
		<p>Websize - Quản Lý Thư Viện @2018</p>
	</div>
	<!--Footer-->
	</div>

</body>

</html>