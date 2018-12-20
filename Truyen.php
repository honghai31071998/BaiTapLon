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
                            <h4>Tên truyện</h4>
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
                        <h4 class="box-title" style="width: 75%"> TRUYỆN NƯỚC NGOÀI</h4>
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
                                                <li> <a href="#">
													Đi tìm thời gian đã mất  </a></li>
                                            </h4>
                                        </div>
                                        <div class="ggg">
                                            <div class="hhh"><img src="img/img_11.jpg" style="width:100px;"></div>
                                            <div class="jjj">Tác giả:Marcel Proust <br>
                                                 </div>
                                        </div>
                                </td>
                                <td>
                                    <div class="border-td">
                                        <div class="fff">
                                            <h4>
                                                <li><a href="#">Đại gia Gatsby Đại gia Gatsby (F.Scott Fitzgerald)</a></li>
                                            </h4>
                                        </div>
                                        <div class="ggg">
                                            <div class="hhh"><img src="img/img_10.jpg" style="width:100px;"></div>
                                            <div class="jjj">Tác giả:F.Scott Fitzgerald<br>
                                                </div>
                                        </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="Truyện.php">1</a></li>
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
                        <h4 class="box-title" style="width: 75%"> TRUYỆN KIẾM HIỆP </h4>
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
                                                <li><a href="#">Tru Tiên</a></li>
                                            </h4>
                                        </div>
                                        <div class="ggg">
                                            <div class="hhh"><img src="img/tru-tien.jpg" style="width:100px;"></div>
                                            <div class="jjj">Tác giả: Tiểu Đỉnh <br>
                                               </div>
                                        </div>
                                </td>
                                <td>
                                    <div class="border-td">
                                        <div class="fff">
                                            <h4>
                                                <li><a href="#">Hoa Thiên Cốt</a></li>
                                            </h4>
                                        </div>
                                        <div class="ggg">
                                            <div class="hhh"><img src="img/hoa-thien-cot.jpg" style="width:100px;"></div>
                                            <div class="jjj">Tác giả:Fresh Quả Quả<br>
                                               </div>
                                        </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="pagination">
                        <ul>
                            <li><a href="Truyen.php">1</a></li>
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

