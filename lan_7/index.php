<?php
$time = time();
?>
<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/logo-left.png">
    <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Cloud8 - Lần VII</title>

    <meta property="og:image"
    content="http://cdn.vinacis.com/img/bannercloud_1.jpg" />

    <meta property="og:description"
    content="" />

    <link rel="image_src"
    href="http://cdn.vinacis.com/img/bannercloud_1.jpg" />


    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="css/reset.css" rel="stylesheet">
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <link type="text/css" href="css/style-responsive.css" rel="stylesheet">
    <link type="text/css" href="css/magnific-popup.css" rel="stylesheet">
    <link type="text/css" href="css/jquery.mmenu.all.css" rel="stylesheet">
    <link type="text/css" href="css/jquery.bxslider.css" rel="stylesheet">
    <link type="text/css" href="css/custom_style.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.min.js"></script>
    <script type="text/javascript" src="js/jquery.mmenu.all.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.popup-with-move-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-slide-bottom'
        });

        $('.bxslider').bxSlider({
            auto: true,
            adaptiveHeight: false,
        });
    });
    </script>
    <script type="text/javascript">
    $(function() {
        $('nav#menu-responsive').mmenu();
    });
    </script>
    <script src="js/custom.js"></script>

</head>
<body>
    <div id="page" class="<?php echo $time;?>">
        <div class="header-responsive">
            <a href="#menu-responsive" class="hidden-lg hidden-md"> <i
                class="fa fa-bars"></i>
            </a>
        </div>
        <header class="header clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <h1 class="logo">
                            <a href="./" title=""> <img src="images/logo.png" alt="" />
                            </a>
                        </h1>
                    </div>
                    <div class="col-lg-9 col-md-9 hidden-sm hidden-xs">
                        <nav class="menu clearfix">
                            <ul class="hidden-sm hidden-xs">
                                <li>
                                    <section class="submenu">
                                        <div class="btn-group" id="myDropdown">
                                            <span class="btn dropdown-toggle" data-toggle="dropdown"> <a
                                                href="#" title="">Day <i class="fa fa-caret-down"></i></a>
                                            </span>
                                            <div class="dropdown-menu animated">
                                                <section class="sub_content">
                                                    <ul>
                                                        <li>
                                                            <a href="http://cloud8.hostingday.vn/lan_7/day.php"
                                                            title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 7</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://cloud8.hostingday.vn/lan_6/day.html"
                                                            title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 6</a>
                                                        </li>
                                                        <li>
                                                            <a href="http://cloud8.hostingday.vn/lan_5" title="">
                                                                <i class="fa fa-caret-right"></i>Cloud 8 Lần 5
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </section>
                                            </div>
                                        </div>
                                    </section>
                                </li>
                                <li>
                                    <section class="submenu">
                                        <div class="btn-group" id="myDropdown">
                                            <span class="btn dropdown-toggle" data-toggle="dropdown"> <a
                                                href="#" title="">Night <i class="fa fa-caret-down"></i></a>
                                            </span>
                                            <div class="dropdown-menu animated">
                                                <section class="sub_content">
                                                    <ul>
                                                        <li><a href="http://cloud8.hostingday.vn/lan_7/night.php"
                                                            title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 7</a></li>
                                                            <li><a href="http://cloud8.hostingday.vn/lan_6/night.html"
                                                                title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 6</a></li>
                                                                <li><a href="http://cloud8.hostingday.vn/lan_5" title=""><i
                                                                    class="fa fa-caret-right"></i>Cloud 8 Lần 5</a></li>
                                                                    <li><a href="http://cloud8.hostingday.vn/lan_4" title=""><i
                                                                        class="fa fa-caret-right"></i>Cloud 8 Lần 4</a></li>
                                                                        <li><a href="http://cloud8.hostingday.vn/lan_3" title=""><i
                                                                            class="fa fa-caret-right"></i>Cloud 8 Lần 3</a></li>
                                                                            <li><a href="http://cloud8.hostingday.vn/lan_2" title=""><i
                                                                                class="fa fa-caret-right"></i>Cloud 8 Lần 2</a></li>
                                                                                <li><a href="http://cloud8.hostingday.vn/lan_1" title=""><i
                                                                                    class="fa fa-caret-right"></i>Cloud 8 Lần 1</a></li>
                                                                                </ul>
                                                                            </section>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </li>
                                                            <li><a href="http://cloud8.hostingday.vn/workshop/" title=""
                                                                class="trans-hover">Workshop</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
								
								<?php require_once('php/fix_menu.php');?>
                                <section class="banner">
                                    <img src="images/lan_7/banner.jpg" class="img-responsive" />
                                    <figure class="cloud" style="bottom:-130px !important"></figure>
                                </section>

                                <section class="slider-bottom">
                                    <div class="container">
                                        <section class="countdown">
                                            <h2>
                                                <!-- 						<span>COMING SOON</span> <img src="images/line.png" alt="" /> -->
                                            </h2>
											<!--
                                            <span class="date">26/05/2017 </span>
                                            <center><h2>COMING SOON</h2></center>
											-->
                                            <div class="col-md-2 hidden-xs"></div>
                                            <div class="col-md-8 col-xs-12">

                                                <div id="countdown" class="ClassyCountdownDemo"></div>
                                            </div>
                                            <div class="col-md-2 hidden-xs"></div>

                                        </section>
                                        <div
                                        style="clear: both; text-align: center; padding: 40px 0 20px 0; font-size: 23px; font-family: 'robotoslab', Arial, Helvetica, sans-serif;">
                                        Location: <em> “Grand Palace”</em> </br>
                                    </br> <span style="font-size: 18px; font-weight:">142/18 Cong Hoa
                                        Street - Tan Binh District - Ho Chi Minh City - Vietnam </span>
                                    </div>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sutq2Yj09BM?list=PLAtIv7WQZZgiFBBmoiG1D1FbXA6HHRFMP"></iframe>
                                    </div>
                                </div>
                            </section>

                            <section class="intro" id="intro">
                                <div class="row">
                                    <div class="container">
                                        <div class="col-md-12">
                                            <h2>
                                                <span><img src="images/lan_7/logo.png" style="width:60%"/></span>
                                            </h2>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="content">
                                                <p class="lead">
                                                    Với chủ đề <b>“Siêu năng lực tính toán trong cách mạng công nghiệp 4.0” </b>
                                                    Cloud8 lần VII tiếp tục xu hướng công nghệ mới, vừa hiện đại nhưng lại rất gần với đời sống cộng đồng.
                                                    Dựa trên nền tảng Cloud Computing, sự kiện năm nay hướng đến mục tiêu tìm ra các giải pháp,
                                                    phần mềm nhằm giải quyết các bài toán về giao thông, an ninh công cộng và các ứng dụng
                                                    cần sự tính toán lớn như render phim ảnh, encoding và tính toán dữ liệu lớn.
                                                </p>
                                                <p>
                                                    Năm 2017, ngày hội Cloud8 có sự tham dự của đông đảo các doanh nghiệp bao gồm
                                                    các doanh nghiệp cung cấp Hạ tầng máy chủ, Hosting, Datacenter, đến các doanh nghiệp
                                                    cung cấp phần mềm và ứng dụng trong và ngoài nước, Cloud8 lần VII hứa hẹn sẽ mang lại nhiều điều
                                                    thú vị cho khách tham dự với các hoạt động diễn ra xuyên suốt ngày hội.
                                                </p>
                                                <!-- <p>
                                                Một điểm mạnh của sự kiện là chương trình Giờ Vàng Công Nghệ,
                                                khách tham gia được sở hữu các vật phẩm đến từ những đơn vị tài
                                                trợ với giá chỉ từ 0đ </br>
                                                <a style="color: #0000FF;"
                                                href="http://cloud8.hostingday.vn/lan_6/auction.php">Xem sản
                                                phẩm</a></br>
                                            </p> -->
                                        </br>
                                        <p>
                                            Xem thêm chuyên mục <a target="_brank" style="color: #009ce9"
                                            href=" http://cloud8.hostingday.vn/lan_7/day.php">Cloud8 Day </a>và
                                            <a target="_brank" style="color: #009ce9"
                                            href=" http://cloud8.hostingday.vn/lan_7/night.php">Cloud8
                                            Night</a> để biết thêm chi tiết hoặc cập nhật thông tin tại: <a
                                            target="_brank" style="color: #009ce9"
                                            href=" https://www.facebook.com/cloud8.vinacis">facebook.com/cloud8.vinacis</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="content-section-a">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <hr class="section-heading-spacer">
                                    <div class="clearfix"></div>
                                    <h2 class="section-heading">CLOUD8 DAY</h2>
                                    <p class="">
                                        Cloud8 Day lần VII được tổ chức không chỉ là nơi trao đổi, tiếp nhận thông tin về công nghệ mới mà còn là
                                        ngày hội để các doanh nghiệp giới thiệu các sản phẩm, cùng các chương trình ưu đãi dành riêng cho khách
                                        hàng của mình thông qua hoạt động triển lãm xuyên suốt ngày hội.
                                    </p><br>
                                    <p>
                                        Tiếp nối thành công của Cloud8 lần VI, Chương trình <b>“Đấu giá từ thiện”</b> tại Cloud8 lần VII sẽ có thêm nhiều
                                        sản phẩm đấu giá mới, hy vọng sẽ nhận được sự ủng hộ nhiệt tình hơn nữa để qua đó Cloud8 cùng các doanh nghiệp
                                        có thể góp thêm sức cho hoạt động từ thiện nước nhà, mang lại nhiều lợi ích thiết thực đến các đồng bào đang
                                        gặp khó khăn.
                                    </p><br>
                                    <p>
                                        Đặc biệt, năm 2017 sẽ diễn ra ngày hội Startup và các Nhà đầu tư -  là nơi gặp gỡ, quy tụ các ý tưởng và
                                        sản phẩm mới lạ, chương trình talkshow và phần thi của Startup cũng sẽ xoay quanh chủ đề đang rất nóng
                                        hiện nay <b>”Siêu năng lực tính toán trong cách mạng công nghiệp 4.0”</b>. Đây sẽ là điểm hấp dẫn và thu hút sự
                                        quan tâm của các Doanh nghiệp trong cả nước.
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-responsive img-thumbnail" src="images/lan_7/day.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-section-b">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-push-6  col-sm-6">
                                    <hr class="section-heading-spacer">
                                    <div class="clearfix"></div>
                                    <h2 class="section-heading">CLOUD8 NIGHT</h2>
                                    <p class="">
                                        Với hình ảnh chủ đạo của Đỉnh Olympus và các vị thần Hy lạp, <b>OLYMPUS NIGHT – GOD OF CLOUD</b> là đêm hội
                                        giao lưu với nhiều tiết mục hấp dẫn, khách tham dự sẽ có cơ hội trao đổi cùng các CEO, CTO đến từ các
                                        tổ chức CNTT thành công tại Việt Nam và trên Thế giới. Mỗi khoảnh khắc đến với Cloud8 Night hứa hẹn
                                        sẽ là những giây phút thật ấn tượng.
                                    </p><br>
                                    <p>
                                        Trải qua 6 lần tổ chức sự kiện Cloud8, VinaCIS phối hợp với Hội tin học Thành phố Hồ Chí Minh (HCA)
                                        cùng các đơn vị tài trợ đã ngày càng có những bước đi vững chắc, tự tin mang đến một ngày hội.
                                    </p>
                                </div>
                                <div class="col-sm-pull-6  col-sm-6">
                                    <img class="img-responsive img-thumbnail" src="images/lan_7/night.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--section class="banner_mid">
                    <div class="row">
                    <div class="container">
                    <img src="images/day.jpg" alt="">
                </div>
            </div>

        </section>
        <div class="container">
        <div class="clearfix">
        <a href="auction.php" class="btn-register" style="float: right; margin-top: 20px"><i class="fa fa-angle-double-right"></i> Xem sản phẩm đấu giá</a>
    </div>
</div-->

<section class="agenda" id="agenda">
    <div class="container">
        <div class="row">
            <center>
                <h2 class="title">
                    Hình ảnh demo trước sự kiện
                </h2>
            </center>
            <ul class="bxslider">
                <li><img src="images/lan_7/demo/1.png" /></li>
                <li><img src="images/lan_7/demo/2.png" /></li>
                <li><img src="images/lan_7/demo/3.png" /></li>
                <li><img src="images/lan_7/demo/4.png" /></li>
                <li><img src="images/lan_7/demo/5.png" /></li>
                <li><img src="images/lan_7/demo/6.png" /></li>
                <li><img src="images/lan_7/demo/7.png" /></li>
                <li><img src="images/lan_7/demo/8.png" /></li>
                <li><img src="images/lan_7/demo/9.jpg" /></li>
                <li><img src="images/lan_7/demo/10.png" /></li>
            </ul>
        </div>
        <?php require_once('php/news.php');?>
</div>
</section>

<section class="agenda" id="agenda">
    <div class="container">
        <div class="row">
            <center>
                <h2 class="title">
                    DOWNLOAD TÀI LIỆU TẠI SỰ KIỆN<img src="images/line.png" alt="" style="margin-bottom: 30px;">
                </h2>
                <div class="col-md-12" style="margin-top: 20px;">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeYzsx8rOdng0rGGPmRma2KW_kenOryhMSXe3i5s2OJKtcSyw/viewform?c=0&w=1" target="_blank">
                        <div class="fa fa-cloud-download" style="font-size: 20px;float: left;">
                            KHẢO SÁT THỰC TRẠNG VÀ NHU CẦU SỬ DỤNG DỊCH VỤ/ỨNG DỤNG TRÊN CLOUD
                        </div>
                    </a>
                </div>
            </center>
        </div>
    </div>
</section>
<!-- modal 8 -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg container">
        <div align="center" class="embed-responsive embed-responsive-16by9" >
            <video class="embed-responsive-item" controls>
                <source  type="video/mp4"></source>
                <source  type="video/mp4"></source>
            </video>
        </div>
    </div>
</div>


<script type="text/javascript">
function show_video(uri){
    // 					$('#add_video').attr('src', uri);
    var video = document.getElementsByTagName('video')[0];
    var sources = video.getElementsByTagName('source');
    sources[0].src = uri+'.mp4';
    sources[1].src = uri+'.ogv';
    video.load();
    $('#myModal').modal({show : 'true'});
}

$('#myModal').on('hidden.bs.modal', function () {

    var video = document.getElementsByTagName('video')[0].pause();
})
// 			if($('#myModal').hasClass('in')){
// 				var video = document.getElementsByTagName('video')[0].pause();

// 			}

</script>



<section class="agenda chuongtrinh" id="agenda">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <h2>
                    Chương trình <span>Agenda</span> <img src="images/line.png"
                    alt="">
                </h2>
            </div>
            <div class="col-md-6">
                <span class="date">Day</span>
                <div class="detail">
                    <a href="./day.php">Xem chi tiết</a>
                </div>
                <ul>
                    <li>
                        <figure class="left">08h00–12h00
                        </figure>
                        <figure class="right gray btn_toggle_agenda_sub_list">
                            <p>Hội thảo: Siêu năng lực tính toán trong cách mạng công nghiệp 4.0</p>
                            <span></span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </figure>
                        <figure class="right white sub">
							<li>
                                <figure class="left">08h00-08h30
                                </figure>
                                <figure class="right">
                                    <p>Đón khách</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">08h30-09h30
                                </figure>
                                <figure class="right">
                                    <p>Khai mạc và tham quan gian hàng</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">09h30-09h50
                                </figure>
                                <figure class="right">
                                    <p>Chuyên đề: Hạ Tầng lưu trữ và tính toán lớn cho CMCN 4.0</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">09h50-10h10
                                </figure>
                                <figure class="right">
                                    <p>Chuyên Đề: Nhu cầu và thực trạng ứng dụng Cloud tại Việt Nam</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">10h10-10h30
                                </figure>
                                <figure class="right">
                                    <p>Chuyên đề: Các bước dịch chuyển của 1 nhà cung cấp Cloud trước CMCN 4.0</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">10h30-10h50
                                </figure>
                                <figure class="right">
                                    <p>Chuyên đề: Ứng dụng Cloud Computing trong EdTech</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">10h50-11h10
                                </figure>
                                <figure class="right">
                                    <p>Chuyên đề: Ứng dụng năng lực tính toán trong công nghiệp giải trí</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">11h10-11h30
                                </figure>
                                <figure class="right">
                                    <p>Chuyên đề: Deep Learning trong nhận diện cảm xúc và ứng dụng</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">11h30-12h00
                                </figure>
                                <figure class="right">
                                    <p>Tọa đàm với các diễn giả</p>
                                </figure>
                            </li>
                        </figure>
                    </li>
                    <li>
                        <figure class="left">13h30–17h00
                        </figure>
                        <figure class="right gray btn_toggle_agenda_sub_list">
                            <p>Ngày hội gặp gỡ Startup với doanh nghiệp và các quỹ đầu tư</p>
                            <span></span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </figure>
                        <figure class="right white sub">
                            <li>
                                <figure class="left">13h30-14h00
                                </figure>
                                <figure class="right">
                                    <p>Trao quyết định thành lập bàn điều hành hệ sinh thái khỏi nghiẽp ICT TP.HCM
									Chương trình Roadshow khởi nghiệp và tọa đàm ICT</p>
                                </figure>
                            </li>
                            <li>
                                <figure class="left">14h00-14h15
                                </figure>
                                <figure class="right">
                                    <p>Lễ ra mắt và giời thiệu Quỹ đầu tư ESP</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">14h15-14h35 
                                </figure>
                                <figure class="right">
                                    <p>Kinh nghiệm kêu gọi vốn thành công</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">14h35-14h55
                                </figure>
                                <figure class="right">
                                    <p>Cloud computing, công cụ để Startup tiến nhanh và xa hơn</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">14h55-15h15
                                </figure>
                                <figure class="right">
                                    <p>Chính sách hỗ trợ không gian làm việc cho Startup</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">15h15-15h30
                                </figure>
                                <figure class="right">
                                    <p>Startup 360 độ: Kênh truyền thông hỗ trợ khởi nghiệp</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">15h30-16h30 
                                </figure>
                                <figure class="right">
                                    <p>Tọa đàm 5 nguồn lực hỗ trợ Startup</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">16h30-17h00
                                </figure>
                                <figure class="right">
                                    <p>Giờ vàng Công nghệ - Đấu giá từ thiện</p>
                                </figure>
                            </li>
                        </figure>
                    </li>
                    <li>
                        <figure class="left">08h00–17h00
                        </figure>
                        <figure class="right gray">
                            <p>Triển lãm sản phẩm/ Dịch vụ/ Giải pháp</p>
                            <span></span>
                        </figure>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <span class="date">Night</span>
                <div class="detail">
                    <a href="./night.php">Xem chi tiết</a>
                </div>
                <ul>
                    <li>
                        <figure class="left">18h00-18h30
                        </figure>
                        <figure class="right gray">
                            <p>Đón khách</p>
                            <span></span>
                        </figure>
                    </li>
                    <li>
                        <figure class="left">18h30–19h00
                        </figure>
                        <figure class="right gray btn_toggle_agenda_sub_list">
                            <p>Chương trình khai mạc</p>
                            <span></span>
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </figure>
                        <figure class="right white sub">
                            <li>
                                <figure class="left">18h30–19h00
                                </figure>
                                <figure class="right">
                                    <p>Tiết mục mở màn và phát biểu khách mời</p>
                                </figure>
                            </li>
                            <li>
                                <figure class="left">19h00–19h10
                                </figure>
                                <figure class="right">
                                    <p>Trao kỉ niệm chương Cloud8</p>
                                </figure>
                            </li>
                            <li>
                                <figure class="left">19h10–19h20
                                </figure>
                                <figure class="right">
                                    <p>Ký kết hợp tác</p>
                                </figure>
                            </li>
							<li>
                                <figure class="left">
                                </figure>
                                <figure class="right">19h20–19h30
                                    <p>Nghi thức đốt đuốc khai tiệc</p>
                                </figure>
                            </li>
                        </figure>
                    </li>
                    <li>
                        <figure class="left">19h20–22h00
                        </figure>
                        <figure class="right gray">
                            <p>Tiệc tối và chương trình giải trí</p>
                            <span></span>
                        </figure>
                    </li>
					
                </ul>
            </div>
        </div>
    </div>
</section>

<?php require_once('php/speakers.php');?>

<Section class="dangky">
    <div class="row">
        <div class="container" style="text-align: center">
            <div>
                <h2>
                    Đăng ký tham gia <span>Register</span> <img src="images/line.png"
                    alt="">
                </h2>
            </div>
            <div>
                <iframe frameborder="0" width="600" height="600"
                style="max-width: 100%; text-align: center;" align="center"
                src="https://ticketbox.vn/ticket-booking/64713/widget"></iframe>
            </div>
        </div>
    </div>
</section>
<!--EndTicktetbox/-->
<section class="sponsor">
    <div class="row">
        <div class="container">
            <div class="col-md-12">
                <h2>
                    Nhà Tài Trợ <span style="margin-bottom: 0;">SPONSOR</span>
                    <a href="sponsors.php" style="color: #ff8000; font-size: 15px;">
                        Xem chi tiết
                    </a>
                    <img src="images/line.png" alt="">
                </h2>
            </div>
            <div class="col-md-12">
                <a href="sponsors.php">
                    <img src="images/taitro2017_20170525.jpg" width="100%" alt="" class="img-responsive img-taitro">
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once('php/footer.php');?>

<nav id="menu-responsive">
    <ul>
        <li><a href="" title="" class="trans-hover">Day </a>
            <ul>
                <li><a href="http://cloud8.hostingday.vn/lan_7/day.php" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 7</a>
				</li>
				<li><a href="http://cloud8.hostingday.vn/lan_6/day.html" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 6</a> 
				</li>
				<li><a href="http://cloud8.hostingday.vn/lan_5" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 5</a>
				</li>
				<li><a href="http://cloud8.hostingday.vn/lan_4" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 4</a></li>
				<li><a href="http://cloud8.hostingday.vn/lan_3" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 3</a></li>
				<li><a href="http://cloud8.hostingday.vn/lan_2" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 2</a></li>
				<li><a href="http://cloud8.hostingday.vn/lan_1" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 1</a></li>

			</ul>
		</li>
		<li><a href="" title="" class="trans-hover">Night</a>
			<ul>
				<li><a href="http://cloud8.hostingday.vn/lan_7/night.php" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 7</a></li>
				<li><a href="http://cloud8.hostingday.vn/lan_6/night.html" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 6</a></li>
				<li><a href="http://cloud8.hostingday.vn/lan_5" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 5</a></li>
			</ul>
		</li>
		<li><a href="http://cloud8.hostingday.vn/workshop/" title="" class="trans-hover">Workshop</a></li>
		<li><a href="" title="" class="trans-hover"><img src="images/logo-left-2017.png" alt="" /></a>
			<ul>
				<li><a href="#intro" title="" class="active">Chương trình - Home page</a></li>
				<li><a href="day.php" title="">Cloud8 Day 7 </a></li>
				<li><a href="night.php" title="">Cloud8 Night 7 </a></li>
				<!--
				<li><a href="exhibition.html" title="">Gian hàng - Exhibition</a></li>
				<li><a href="hinh-anh.html" title="">Hình ảnh</a></li>
					-->

			</ul>
		</li>
	</ul>
</nav>

</div>

<div id="popup" class="zoom-anim-dialog mfp-hide">
	<iframe frameborder="0" width="600" height="600" style="max-width: 100%; text-align: center;" align="center" src="https://ticketbox.vn/ticket-booking/61146/widget"></iframe>
</div>


<a href="#popup_after_send" class="popup-with-move-anim"></a>
<div id="popup_after_send" class="zoom-anim-dialog mfp-hide">
	<section class="form_account_login">
		<h3>Thông báo</h3>
		<div>
			<?php echo $_COOKIE['msg']; ?>

		</div>
	</section>
</div>

<!--- Popup when send mail ok-------->
<?php
if (isset ( $_COOKIE ['is_sent'] )) {
	?>

	<script>
	(function($){
		$(window).load(function() {
			$.magnificPopup.open({
				items: {
					src: '#popup_after_send'
				},
				type: 'inline'
			});
		});
	})(jQuery);


	</script>

	<?php
	setcookie ( 'is_sent', '', time () - 300 );
	setcookie ( 'msg', '', time () - 300 );
}
?>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/cus.js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.throttle.js"></script>
<script src="js/jquery.classycountdown.min.js"></script>

<script type='text/javascript'>
	var d = new Date();
	var nowTime = d.getTime() / 1000;

	var endTime =  Date.parse("2017/05/26 08:00:00 GMT +0700") / 1000;

	$('document').ready(function() {

		$('#countdown').ClassyCountdown({
			end: endTime,
			now: nowTime,
			labels: true,
			labelsOptions: {
				lang: {
					days: 'Days',
					hours: 'hours',
					minutes: 'minutes',
					seconds: 'seconds'
				},
				style: 'font-family:\'robotoslab\';font-size:0.5em; text-transform:uppercase;'
			},
			style: {
				element: "",
				textResponsive: .5,
				days: {
					gauge: {
						thickness: .12,
						bgColor: "rgb(31, 27, 46)",
						fgColor: "rgb(31, 27, 46)"
					},
					textCSS: 'font-family:\'robotoslab\';color:#3c434d;'
				},
				hours: {
					gauge: {
						thickness: .12,
						bgColor: "rgb(31, 27, 46)",
						fgColor: "rgb(31, 27, 46)"
					},
					textCSS: 'font-family:\'robotoslab\';color:#3c434d;'
				},
				minutes: {
					gauge: {
						thickness: .12,
						bgColor: "rgb(31, 27, 46)",
						fgColor: "rgb(31, 27, 46)"
					},
					textCSS: 'font-family:\'robotoslab\';color:#3c434d;'
				},
				seconds: {
					gauge: {
						thickness: .12,
						bgColor: "rgb(31, 27, 46)",
						fgColor: "rgb(31, 27, 46)"
					},
					textCSS: 'font-family:\'robotoslab\';color:#3c434d;'
				}
			}
		});
		
		// speckers action
		$('.speakers-li li').hover(function(){
			$('.speakers-li li img').css({'border': '5px solid rgb(218, 218, 218)'})
			$(this).find('img').css({'border': '5px solid rgb(255, 128, 0)'});
			$('.speakers-ct div').hide();
			$('.speakers-ct div').eq($(this).index()).show();
		});

	})
</script>
</body>
</html>
