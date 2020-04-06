<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Hinh ảnh</title>
<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
<link type="text/css" href="css/reset.css" rel="stylesheet">
<link type="text/css" href="css/style.css" rel="stylesheet">
<link type="text/css" href="css/style-responsive.css" rel="stylesheet">
<link type="text/css" href="css/magnific-popup.css" rel="stylesheet">
<link type="text/css" href="css/jquery.mmenu.all.css" rel="stylesheet">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery-1.11.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.min.js"></script>
<script type="text/javascript" src="js/uploadimages.js"></script>
<script type="text/javascript" src="js/jquery.wallform.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<style type="text/css">
	label.filebutton {
    width:120px;
    height:40px;
    overflow:hidden;
    position:relative;
    background-color:#ccc;
}

label span input {
    z-index: 999;
    line-height: 0;
    font-size: 50px;
    position: absolute;
    top: -2px;
    left: -700px;
    opacity: 0;
    filter: alpha(opacity = 0);
    -ms-filter: "alpha(opacity=0)";
    cursor: pointer;
    _cursor: hand;
    margin: 0;
    padding:0;
}

</style>

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
  });
</script>
<script type="text/javascript">
	$(function() {
		$('nav#menu-responsive').mmenu();
	});
</script>



  <script type="text/javascript">
      $(document).ready(function() {
        $('.zoom-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          closeOnContentClick: false,
          closeBtnInside: false,
          mainClass: 'mfp-with-zoom mfp-img-mobile',
          image: {
            verticalFit: true,
            titleSrc: function(item) {
              return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
            }
          },
          gallery: {
            enabled: true
          },
          zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
              return element.find('img');
            }
          }
          
        });
      });
    </script>
</head>
<body>
<div id="page">
    <div class="header-responsive">
        <a href="#menu-responsive" class="hidden-lg hidden-md">
			<i class="fa fa-bars"></i>
        </a>
    </div>
	<header class="header clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <h1 class="logo">
                        <a href="./" title="">
                            <img src="images/logo.png" alt=""/>
                        </a>
                    </h1>
                </div>
                <div class="col-lg-9 col-md-9 hidden-sm hidden-xs">
                    <nav class="menu clearfix">
                        <ul class="hidden-sm hidden-xs">
                            <li>
                                <section class="submenu">
                                    <div class="btn-group" id="myDropdown">
                                        <span class="btn dropdown-toggle" data-toggle="dropdown">
											<a href="#" title="">Day <i class="fa fa-caret-down"></i></a>
                                        </span>
                                        <div class="dropdown-menu animated">
                                            <section class="sub_content">
                                                <ul>
                                                   <li><a href="http://cloud8.hostingday.vn/lan_6/day.html" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 6</a></li>
													  <li><a href="http://cloud8.hostingday.vn/lan_5" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 5</a></li>
													<li><a href="http://cloud8.hostingday.vn/lan_4" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 4</a></li>
                                                    <li><a href="http://cloud8.hostingday.vn/lan_3" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 3</a></li>
                                                    <li><a href="http://cloud8.hostingday.vn/lan_2" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 2</a></li>
                                                   <li><a href="http://cloud8.hostingday.vn/lan_1" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 1</a></li>
                                                </ul>
                                            </section>
                                        </div>
                                    </div>
                                </section>
                            </li>
                            <li>
                                <section class="submenu">
                                    <div class="btn-group" id="myDropdown">
                                        <span class="btn dropdown-toggle" data-toggle="dropdown">
											<a href="#" title="">Night <i class="fa fa-caret-down"></i></a>
                                        </span>
                                        <div class="dropdown-menu animated">
                                            <section class="sub_content">
                                                <ul>
                                                 
                                                    <li><a href="http://cloud8.hostingday.vn/lan_6/night.html" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 6</a></li>
													   <li><a href="http://cloud8.hostingday.vn/lan_5" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 5</a></li>
                                                </ul>
                                            </section>
                                        </div>
                                    </div>
                                </section>
                            </li>
                            <li><a href="http://cloud8.hostingday.vn/workshop/" title="" class="trans-hover">Workshop</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
	</header>
    <?php require_once('php/fix_menu.php');?>
    <section class="banner">
    	<img src="images/lan_7/banner.jpg" alt=""/>
        <figure class="cloud"></figure>
    </section>   

	<section class="gallery">
    	<div class="row">
        	<div class="container">
            	<div class="col-md-12">
                    <h2 style="margin-bottom:30px">
                        <span>Hình ảnh cloud 8 lần 7</span>
                        <img src="images/line.png" alt="">
                    </h2>
                </div>
                <div class="col-md-12">
                	<div class="content">
                		<figure class="title-heading">Hình ảnh cloud 8 lần 7</figure>
						<ul class="zoom-gallery">
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-52.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-52.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-67.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-67.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-100.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-100.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-106.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-106.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-115.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-115.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-117.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-117.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-137.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-137.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-141.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-141.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-150.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-150.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-186.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-186.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-190.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-190.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-208.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-208.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-251.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-251.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-260.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-260.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-273.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-273.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-283.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-283.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-298.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-298.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-300.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-300.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-310.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-310.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-326.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-326.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-329.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-329.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-333.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-333.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-351.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-351.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-357.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-357.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-359.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-359.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-368.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-368.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-415.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-415.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-426.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-426.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-434.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-434.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-461.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-461.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-466.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-466.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-471.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-471.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-485.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-485.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-520.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-520.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-583.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-583.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-613.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-613.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-650.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-650.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-653.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-653.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-684.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-684.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-693.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-693.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-719.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-719.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-721.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-721.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-725.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-725.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-738.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-738.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-771.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-771.JPG" alt=""/></a></li>
                            <li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="images/hinhanh/C8-779.JPG"  data-source="" title="Hình ảnh cloud 8 lần 7" ><img src="images/hinhanh/C8-779.JPG" alt=""/></a></li>
						</ul>
                	</div>
                    
                </div>

			</div>
		</div>
	</section>

    <?php require_once('php/footer.php');?>
    
    <nav id="menu-responsive">
        <ul>
            <li>
				<a href="" title="" class="trans-hover">Day </a>
				<ul>
					  <li><a href="http://cloud8.hostingday.vn/lan_6" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 6</a></li>
					  <li><a href="http://cloud8.hostingday.vn/lan_5" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 5</a></li>
						<li><a href="http://cloud8.hostingday.vn/lan_4" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 4</a></li>
						<li><a href="http://cloud8.hostingday.vn/lan_3" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 3</a></li>
						<li><a href="http://cloud8.hostingday.vn/lan_2" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 2</a></li>
					   <li><a href="http://cloud8.hostingday.vn/lan_1" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 1</a></li>
				</ul>
			</li>
			<li><a href="" title="" class="trans-hover">Night</a>
				<ul>

					<li><a href="http://cloud8.hostingday.vn/lan_6/night.html" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 6</a></li>
										<li><a href="http://cloud8.hostingday.vn/lan_5" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 5</a></li>
				</ul>
			</li>
			<li><a href="http://cloud8.hostingday.vn/workshop/" title="" class="trans-hover">Workshop</a></li>
			<li><a href="" title="" class="trans-hover"><img src="images/logo-left.png" alt=""/></a>
				<ul>
					<li><a href="index.html#intro" title="">Chương trình - Home page</a></li>
					<li><a href="day.html" title="">Cloud8 Day 6 </a></li>
					<li><a href="night.html" title="">Cloud8 Night 6 </a></li>
					<li><a href="exhibition.html" title=""  class="active">Gian hàng - Exhibition</a></li>
					<li><a href="hinh-anh.html" title="">Hình ảnh</a></li>
					<li><a href="#popup" title="" class="popup-with-move-anim">Đăng ký tham dự - Registration</a></li>
				</ul>
			</li>
        </ul>
    </nav>
    
</div>    
<div id="popup" class="zoom-anim-dialog mfp-hide">
    <section class="form_account_login">
    	
       	<img src="images/logon.png" alt=""/>
        <h2>
            <span>Tham gia hội thảo</span>
            <img src="images/line.png" alt="">
        </h2>
        <form method="post" action="./sendmail.php">
            <ul>
                <li>
                    <input type="text" name="cus_email" placeholder="Email đăng ký">
                </li>    
                <li>
                    <input type="text" name="cus_fullname" placeholder="Họ và tên">
                </li>
				<li>
                    <input type="text" name="cus_company" placeholder="Công ty">
                </li>    
                <li>
                    <input type="text" name="cus_phone" placeholder="Số điện thoại">
                </li>
                <li>
                    <input type="submit" value="Đăng ký tham gia">
                </li>    
            </ul>                                
        </form>
    </section>
</div>			

<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/cus.js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.throttle.js"></script> 
<script src="js/jquery.classycountdown.min.js"></script>
<script>
	$(document).ready(function() {
		$('#countdown').ClassyCountdown({
			end: '1390868325',
			now: '1388461323',
			labels: true,
			labelsOptions: {
				lang: {
					days: 'Ngày',
					hours: 'Tiếng',
					minutes: 'Phút',
					seconds: 'Giây'
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
		})
	})			
</script>	
</body>
</html>