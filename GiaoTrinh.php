<?php
    session_start();
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
                        <h4 class="box-title" style="width: 75%">TÌM KIẾM</h4>
                    </div>
                </div>
                <div class="border-tk">
                    <div class="border-row">
                        <div class="row-col">
                            <h4>Tên giáo trình</h4>
                            <input type="text" name="tk" style="width:140px;">
                        </div>
                        <div class="row-col">
                            <h4>Phân loại </h4>
                            <input type="text" name="tk" style="width:140px;">
                        </div>
                        <div class="row-col">
                            <h4>Tìm kiếm</h4>
                            <button class="icon-search" style="float:left;width:140px;"><i class="fas fa-search"></i></button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="block2">
                <div class="box-common">
                    <div class="heading">
                        <h4 class="box-title" style="width: 75%"> GIÁO TRÌNH</h4>
                    </div>
                </div>
                <div class="border1">
                    <div class="border11">
                        <table>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="border-td">
                                        <div class="fff">
                                            <h4>
                                                <li> <a href="chitietsach.php">
                                                        Hệ thống thông tin địa lý</a></li>
                                            </h4>
                                        </div>
                                        <div class="ggg">
                                            <div class="hhh"><img src="giaotrinh/img_13.jpg" style="width:100px;"></div>
                                            <div class="jjj">Tác giả: Hoàng Xuân Thành, Hoàng Lê Long <br>
                                                Nhà xuất bản: Bách khoa Hà Nội <br>
                                                Năm xuất bản: 2018 </div>
                                        </div>
                                </td>
                                <td>
                                    <div class="border-td">
                                        <div class="fff">
                                            <h4>
                                                <li>Hình học đường và thiết kế định tuyến</li>
                                            </h4>
                                        </div>
                                        <div class="ggg">
                                            <div class="hhh"><img src="giaotrinh/img_14.jpg" style="width:100px;"></div>
                                            <div class="jjj">Tác giả: Lại Tuấn Anh<br>
                                                Nhà xuất bản: Bách khoa Hà Nội<br>
                                                Năm xuất bản: 2018 </div>
                                        </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="Giaotrinh.php">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                            <li><a href="#">Trang cuối</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="block2">
                <div class="box-common">
                    <div class="heading">
                        <h4 class="box-title" style="width: 75%"> TL THAM KHẢO</h4>
                    </div>
                </div>
                <div class="border1">
                    <div class="border11">
                        <table>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>
                                    <div class="border-td">
                                        <div class="fff">
                                            <h4>
                                                <li>Kiểm soát chất lượng không khí bên trong công trình</li>
                                            </h4>
                                        </div>
                                        <div class="ggg">
                                            <div class="hhh"><img src="img/img_11.jpg" style="width:100px;"></div>
                                            <div class="jjj">Tác giả: Hoàng Xuân Thành, Hoàng Lê Long <br>
                                                Nhà xuất bản: Bách khoa Hà Nội <br>
                                                Năm xuất bản: 2018 </div>
                                        </div>
                                </td>
                                <td>
                                    <div class="border-td">
                                        <div class="fff">
                                            <h4>
                                                <li>Hình học đường và thiết kế định tuyến</li>
                                            </h4>
                                        </div>
                                        <div class="ggg">
                                            <div class="hhh"><img src="img/img_14.jpg" style="width:100px;"></div>
                                            <div class="jjj">Tác giả: Lại Tuấn Anh
                                                Nhà xuất bản: Bách khoa Hà Nội
                                                Năm xuất bản: 2018 </div>
                                        </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="Giaotrinh.php">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                            <li><a href="#">Trang cuối</a></li>
                        </ul>

                    </div>


                </div>
            </div>
        </div>
            <div class="container-right">
                <div class="panel-news">
                    <div class="panel-news">
                        <img src='img/hotrott.png' style="width:220px;">
                    </div>
                </div>
            </div>
        </div>

    </div>
        <div id="Footer">
            <p><i>Websize - Quản Lý Thư Viện @2018</i></p>
        </div>
        <!--Footer-->
    </div>

</body>

</html>