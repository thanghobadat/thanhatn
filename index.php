<!DOCTYPE html>
<html lang="en">

<head>
    <title>ATN shop </title>
    <link rel="stylesheet" type="text/css" href="CSS/trangchu.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // Prevent dropdown menu from closing when click inside the form
        $(document).on("click", ".navbar-right .dropdown-menu", function(e){
            e.stopPropagation();
        });
    </script>
    <head>

    <body>
        
        <nav class="navbar navbar-default navbar-expand-lg navbar-light">
            <div class="navbar-header d-flex col">
                <a class="navbar-brand" href="#">ATN<b>Shop</b></a>  		
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Introduce</a></li>			
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Sale<b class="caret"></b></a>
                        <ul class="dropdown-menu">					
                            <li><a href="#" class="dropdown-item">Sale 10%</a></li>
                            <li><a href="#" class="dropdown-item">Sale 20%</a></li>
                            <li><a href="#" class="dropdown-item">Sale 30%</a></li>
                            <li><a href="#" class="dropdown-item">Sale 50%</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active"><a href="#" class="nav-link">News</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sercive</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Support</a></li>
                </ul>
                <form class="navbar-form form-inline">
                    <div class="input-group search-box">								
                        <input type="text" id="search" class="form-control" placeholder="Search...">
                        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right ml-auto">			
                    <li class="nav-item">
                        <a href="InsertData.php">Insert</a>
                    </li>
                    <li class="nav-item">
                        <a href="ConnectToDB.php" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">View</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="banner">
            <a href="#"><img src="image/banner cloud.png" /></a>
        </div>
        
        <div id="main">
            <div id="left">
                <ul>
                    <li class="anh" id="s1">
                        <a href=""><img src="image/Lap-rap-doi-xe-canh-sat-bien-hinh-YY686814-250x250.jpg" class="sp1"/></a>
                        <b class="ma">MÃ: CT04</b>
                        <b><a href="">Lắp ráp đội xe cảnh sát biến hình</a></b>
                        <h4>210.000<sup>đ</sup></h4>
                    </li>

                    <li class="anh" id="s2">
                        <a href="#s2" ><img src="image/Xe-thang-bang-mau-do-cho-be-250x250.jpg" class="sp2"/></a>
                        <b class="ma">MÃ: RT03</b>
                        <b><a href="#">Xe thăng bằng cho bé</a></b>
                        <h4>220.000<sup>đ</sup></h4>
                    </li>

                    <li class="anh" id="s3">
                        <a href="#s3"><img src="image/Bang-phong-phi-tieu-4C-F128-14-250x250.jpg" class="sp3"/></a>
                        <b class="ma">MÃ: OX04</b>
                        <b><a href="#">Bảng phóng phi tiêu 4C</a></b>
                        <h4>265.000<sup>đ</sup></h4>
                    </li>

                </ul>
            </div>
            <div id="right">
                <div class="Menu_right">
                    <h3>Danh mục sản phẩm</h3> 
                    <ul>
                        <li><a href="">ĐỒ CHƠI LẮP RÁP</a></li>
                        <li><a href="">BÚP BÊ</a></li>
                        <li><a href="">XE ĐỒ CHƠI</a></li>
                        <li><a href="">ROBOT, SIÊU NHÂN</a></li>
                        <li><a href="">ĐỒ CHƠI NẤU ĂN</a></li>
                        <li><a href="">ĐỒ CHƠI GỖ</a></li>
                    </ul> 
                </div>


            </div>
        </div>

        <div id="footer">
            <div id="mot">
                <p> <strong>Kiin Fashion Boutique</strong></p>
                <p>Đia chỉ: 144 Tố Hữu, Phường An Hải Bắc, Quận Sơn Trà, Thành Phố Đà Nẵng</p>
                <p>Điên Thoại: 0763501797 - 0585059463</p>
                <p>Zalo: 0763501797</p>
                <p><strong>Thời gian làm việc:  </strong></p>
                <p>Thứ 2 - Chủ nhật</p>
                <p>Sáng: 08h - 12h</p>
                <p>Chiều: 13h - 23h</p>
                <p>MÃ SỐ: 233312032020</p>
            </div>
            <div id="hai">
                <p><strong>Hỗ Trợ khách hàng</strong></p>
                <p>Hướng dẫn mua hàng</p>
                <p>Thời trang quần áo giá sỉ rẻ</p>
                <p>Phương thức thanh toán</p>
                <p>Cách đo size sản phẩm</p>
                <p>Phí giao hàng</p>
            </div>
            <div id="ba">
                <p><strong>Danh mục</strong></p>
                <p class="cach">Trang chủ</p>
                <p class="cach">Giới thiệu</p>
                <p class="cach">Khuyến mãi</p>
                <p class="cach">Tin tức</p>
                <p class="cach">Dịch vụ</p>
                <p class="cach">Liên hệ</p>
            </div>
        </div>


        


    </body>

</html>