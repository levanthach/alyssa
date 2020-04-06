<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>SẢN PHẨM ĐẤU GIÁ TẠI SỰ KIỆN</title>
<?php 
            $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
            $server = $_SERVER['SERVER_NAME'];
            $path = $_SERVER['SCRIPT_NAME'];

            

             // echo $path;
            // echo strpos($path, '/' );
            // var_dump(parse_url($url));
            
            $start_sub = strpos($path, '/' );
            $end_sub = strrpos($path, '/');
            
            $folder =  substr($path, $start_sub+1, $end_sub-1);


            if(isset($_GET['id'])){
                $req = $_GET['id'];
            }
            if(isset($_GET['ip'])){
                $req_ip = $_GET['ip'];
            }
            
            // echo $protocol;

         ?>

<meta property="og:url"                content="<?php echo $protocol.$server.$path.'?id='.$req.'&ip='.$req_ip; ?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php
        if($req == "server"){
            echo "INTEL SERVER";
        }else if($req == "dauso088"){
            echo "ĐẦU SỐ 088 (15 SỐ)";
        }else if ($req == 'maythanhtoan') {
            echo "MÁY THANH TOÁN MPOS";
        }else if ($req == 'pinsac') {
            echo "PIN SẠC ANKER";
        }else if ($req == 'phieuhoc') {
            echo "PHIẾU HỌC HACKER MŨ TRẮNG ";
        }else if ($req == 'domain') {
           echo "DOMAIN TPHCM.NET ";
        }else if ($req == 'fritzbox') {
           echo "THIẾT BỊ FRITZBOX ";
        }else if($req == 'touro'){
        	echo "HGST Touro Mobile 500GB USB 3.0 External Hard Drive, Black (HTOLMX3NA5001ABB)";
        }

 ?>" />
<meta property="og:description"        content="<?php
        if($req == "server"){
            echo "Giá ngoài thị trường: 19.750.000 + VAT - SẢN PHẨM ĐẤU GIÁ TẠI CLOUD8";
        }else if($req == "dauso088"){
            echo "Giá ngoài thị trường: 148.000 vnđ - SẢN PHẨM ĐẤU GIÁ TẠI CLOUD8";
        }else if ($req == 'maythanhtoan') {
            echo "SẢN PHẨM ĐẤU GIÁ TẠI CLOUD8";
        }else if ($req == 'pinsac') {
            echo "Giá ngoài thị trường: 1,490,000 VND - SẢN PHẨM ĐẤU GIÁ TẠI CLOUD8";
        }else if ($req == 'phieuhoc') {
            echo "Bước nhảy đấu giá: 100.000 vnđ- SẢN PHẨM ĐẤU GIÁ TẠI CLOUD8";
        }else if ($req == 'domain') {
           echo "Giá khởi điểm 0 đ - Số lượng: 1 - SẢN PHẨM ĐẤU GIÁ TẠI CLOUD8";
        }else if ($req == 'fritzbox') {
           echo "Giá khởi điểm 0 đ - Số lượng: 5 - SẢN PHẨM ĐẤU GIÁ TẠI CLOUD8";
        }else if($req == 'touro'){
        	echo "Giá khởi điểm 0 đ - Số lượng: 1 - SẢN PHẨM ĐẤU GIÁ TẠI CLOUD8";
        }

 ?>?" />
<meta property="og:image"              content="<?php
        if($req == "server"){
            echo $protocol.$server.'/'.$folder.'/images/daugia/Server_Maychunet.jpg';
        }else if($req == "dauso088"){
            echo $protocol.$server.'/'.$folder.'/images/daugia/So088_vnpt.jpg';
        }else if ($req == 'maythanhtoan') {
            echo $protocol.$server.'/'.$folder.'/images/daugia/Maythanhtoan_mpos.jpg';
        }else if ($req == 'pinsac') {
            echo $protocol.$server.'/'.$folder.'/images/daugia/Anker_EXA.jpg';
        }else if ($req == 'phieuhoc') {
            echo $protocol.$server.'/'.$folder.'/images/daugia/Phieuhoc_hackermutrang.jpg';
        }else if ($req == 'domain') {
            echo $protocol.$server.'/'.$folder.'/images/daugia/Domain.jpg';
        }else if ($req == 'fritzbox') {
            echo $protocol.$server.'/'.$folder.'/images/daugia/fritzbox.jpg';
        }else if ($req == 'touro') {
            echo $protocol.$server.'/'.$folder.'/images/daugia/touro.jpg';
        }

 ?>" />


<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
<link type="text/css" href="css/reset.css" rel="stylesheet">
<link type="text/css" href="css/style.css" rel="stylesheet">
<link type="text/css" href="css/style-responsive.css" rel="stylesheet">
<link type="text/css" href="css/magnific-popup.css" rel="stylesheet">
<link type="text/css" href="css/jquery.mmenu.all.css" rel="stylesheet">
<link type="text/css" href="css/app.css" rel="stylesheet">

<link type="text/css" href="css/custom_style.css" rel="stylesheet"/>
<link type="text/css" href="css/shop.style.css" rel="stylesheet"/>



<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery-1.11.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
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
<script src="js/custom.js"></script>
<script>
                            (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=669579483145789";
                                    fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                            </script>




</head>
<body>

<div id="fb-root"></div>
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
                            <li><a href="http://cloud8.hostingday.vn/workshop/" title="" class="trans-hover">Workshop</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
	</header>
    <section class="fix_menu hidden-xs hidden-sm">
		<span class="menu-content"></span>
    	<ul class="menu-left">
			
            <li style="background: #ff8000">
				<a href="http://cloud8.hostingday.vn/lan_6/" title="Chương trình" class="active"><i class="fa fa-home"></i></a>
			</li>
            <li style="background: #d93850;">
				<a href="day.html" title="Cloud8 Day 6">
					<img src="./images/sun.png" width="35px"/>
				</a>
			</li>
            <li style="background: #adadad;">
				<a href="night.html" title="Cloud8 Night 6 "> 
					<img src="./images/night.png" width="35px" /> 
				</a>
			</li>
			<li style="background: #d93850;"><a href="/lan_6/auction.php"
					title="Đấu giá"> <img src="./images/auction.png" width="35px" />
				</a></li>
            <li  style="background: #4e76c7;">
				<a href="exhibition.html" title="Gian hàng">
					<img src="./images/exhibition.png" width="35px" />
				</a>
			</li>
			<li  style="background: #d93850;">
				<a href="hinh-anh.html" title="Hình ảnh">
					<img src="./images/galery.png" width="35px" />
				</a>
			</li>
			
        </ul>
    </section>
    <section class="banner">
    	<img src="images/day.jpg" alt=""/>
        <figure class="cloud"></figure>
    </section>   
    <br/><br/>
    <div class="content container">
    	<div class="filter-results">
    	<?php 
            $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
            $server = $_SERVER['SERVER_NAME'];
            $path = $_SERVER['SCRIPT_NAME'];
            // echo $protocol;

         ?>
    	<div class="list-product-description product-description-brd margin-bottom-30" id="server">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="img-responsive sm-margin-bottom-20" id="server" src="images/daugia/Server_Maychunet.jpg" alt="">

                                <div>
                                    <ul class="list-inline overflow-h">
                                        <li><h4 class="title-price" ><a>MÁY CHỦ INTEL SYSTEM R1304WT2GS</a></h4></li>
                                    </ul> 
                                    <div class="pice_gray" >
                                        <div class="margin-bottom-5">
                                             <b class="margin-right-10">Giá khởi điểm:</b>
                                            <span class="title-price margin-right-10" style="color: red;font-size: 18px;">0 VND</span>
                                        </div> 
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Số lượng: </b>
                                            <span >1</span>
                                        </div>  

                                        <div class="margin-bottom-5">
                                            <b class=" margin-right-10">Giá thị trường: </b>
                                            <span >30.000.000 VND + VAT</span>
                                        </div>
                                        
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Thời gian diễn ra: </b>
                                            <span >15h - 16h (16 - 06 - 2016)</span>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Vị trí: </b>
                                            <span >Sảnh MERCURY</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 product-description">
                                <div class="overflow-h margin-bottom-5">
                                        <ul class="list-inline overflow-h taitro margin-bottom-10">
                                            <li><h4 class="title-price" >Đơn vị tài trợ</h4></li>
                                        
                                        <div class="pull-right">
                                            <img class="img_taitro" src="images/daugia/maychunet.png" alt=""/>
                                        </div>
                                        </ul>
                                     

                                    
                                    
                                     <!-- <div class="margin-bottom-5">
                                        <b class="margin-right-10">Đơn vị tài trợ: </b>
                                        <span >Máy chủ net (maychunet.com</span>
                                    </div>  --> 
                                    
                                    
                                    
                                    <div class="margin-bottom-20">
                                        <b class="margin-right-10">Thông số Kỹ thuật: </b></br>
										<b>  MÁY CHỦ INTEL SYSTEM R1304WT2GS  (Rack 1U_4Hotswap)</b>
                                        <p>
                                        <ul style="list-style-type: square; ">
                                            <li>
                                                Processor: 1/2 CPU E5-2609V3 15M Cache, 1.90 GHzh
                                            </li>
                                            <li>
												Memory: 8Gb PC4  2133R (24 dimm slots support DDR4 ECC RDIMM)
                                            </li>
                                            <li>
                                                Hard Drives: 250GB SSD Crucial MX200 (support 4 Bay  x 3.5", 2.5")
                                            </li>
                                            
                                            <div class="red-more" id="intel-server" style="display: none;">
                                                
                                                    <ul>RAID Controller: onboard 0,1,10
                                                    
                                                    </ul>
                                            
                                                    <ul>Network Controller : Dual 1 GbE LAN
                                                    </ul>
                                            
                                                    <ul>Power Supply: 1/2 x 750W AC Redundant PSU (Platinum Efficiency)
                                                    
                                                    </ul>
                                            
                                                    <ul>Form Factor: 1U rackmount 
                                                    </ul>
                                            
                                                    <ul>Rail kit: Sliding Rails Rackmount 1U Kit
                                                    
                                                    </ul>
                                                    
                                            </div> 
                                            <a href="javascript:void(0);" onclick="readmore();" id="more" style="color: blue;"  title="" >Xem thêm</a>
                                            <a href="javascript:void(0);" onclick="readless();" id="less" style="display: none; color: blue;" title="">Thu gọn</a>                         
                                        </ul>
                                        
                                        </p>
                                    </div>
                                    <ul class="list-inline add-to-wishlist margin-bottom-20">
                                        <li class="wishlist-in">

                                            <div class="fb-like" data-href="<?php echo $protocol.$server.$path;?>?id=server" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                        <li class="compare-in">
                                            <div class="fb-comments" data-href="<?php echo $protocol.$server.$path;?>?id=server&ip=<?php echo rand(0, 100000); ?>" colorscheme="light" data-numposts="1"></div>
                                            
                                        </li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div>   
    	
    	

                    <div class="list-product-description product-description-brd margin-bottom-30" id="dauso088">
                        <div class="row">
                            <div class="col-sm-4">
                                <a><img class="img-responsive sm-margin-bottom-20" src="images/daugia/So088_vnpt.jpg" alt=""></a>
                                <div>
                                    <ul class="list-inline overflow-h">
                                        <li><h4 class="title-price" ><a>ĐẦU SỐ 088 (15 SỐ)</a></h4></li>
                                    </ul> 
                                    <div class="pice_gray" >
                                        <div class="margin-bottom-5">
                                             <b class="margin-right-10">Giá khởi điểm:</b>
                                            <span class="title-price margin-right-10" style="color: red;font-size: 18px;">0 VND</span>
                                        </div> 
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Số lượng: </b>
                                            <span >15</span>
                                        </div>  

                                        <div class="margin-bottom-5">
                                            <b class=" margin-right-10">Giá thị trường: </b>
                                            <span >148.000 VND</span>
                                        </div>
                                        
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Thời gian diễn ra: </b>
                                            <span>15h - 16h (16 - 06 - 2016)</span>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Vị trí: </b>
                                            <span >Sảnh MERCURY</span>
                                        </div>
                                        
                                    </div>
                                </div>




                            </div> 
                            <div class="col-sm-8 product-description">
                                <div class="overflow-h margin-bottom-5">
                                        <ul class="list-inline overflow-h taitro margin-bottom-10">
                                            <li><h4 class="title-price" >Đơn vị tài trợ</h4></li>
                                        
                                             <div class="pull-right">
                                                <img style="max-width: 85px;" src="images/daugia/dauso088.png" alt=""/>
                                            </div>
                                        </ul>
                                    <div class="margin-bottom-20">
                                        <b class="margin-right-10">Chi tiết: </b>
                                        <span >
                                        <ul style="list-style-type: square; ">
                                        	<li>-	Miễn phí 288 phút gọi thoại nội mạng hằng tháng.</li>
                                        	<li>-	Miễn phí 288 tin nhắn nội mạng hằng tháng.</li>
                                        	<li>-	Miễn phí gói 3G MAX Vinaphone tốc độ cao.</li>
                                        	<li>-	Tặng 100% giá trị thẻ nạp cho lần nạp thẻ đầu tiên và tặng 50% giá trị thẻ nạp cho 5 thẻ nạp tiếp theo sau đó.</li>
											<li><b> Số điện thoại đấu giá:</b></li>
											<li>0888.380.980</li>
											<li>0888.452.952</li>
											<li>0888.461.861</li>
											<li>0888.475.675</li>
											<li>0888.493.893</li>
											<li>0888.524.724</li>
											<li>0888.541.841</li>
											<li>0888.57.58.75</li>
											<li>0888.607.907</li>
											<li>0888.642.942</li>
											<li>0888.654.954</li>
											<li>0888.675.875</li>
											<li>0888.741.941</li>
											<li>0888.753.953</li>
											<li>0888.774.874</li>
                                       		 </ul>
                                        
                                        </span>
                                    </div>
                                    <ul class="list-inline add-to-wishlist margin-bottom-20">
                                        <li class="wishlist-in">
                                            <div class="fb-like" data-href="<?php echo $protocol.$server.$path;?>?id=dauso088" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                        <li class="compare-in">
                                            <div class="fb-comments" data-href="<?php echo $protocol.$server.$path;?>?id=dauso088&ip=<?php echo rand(0, 100000); ?>" colorscheme="light" data-numposts="1"></div>

                                        </li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div>  

                    <div class="list-product-description product-description-brd margin-bottom-30" id="fritzbox">
                        <div class="row">
                            <div class="col-sm-4">
                                <a><img class="img-responsive sm-margin-bottom-20" src="images/daugia/fritzbox.jpg" alt=""></a>
                                <div>
                                    <ul class="list-inline overflow-h">
                                        <li><h4 class="title-price" ><a>THIẾT BỊ FRITZBOX</a></h4></li>
                                    </ul> 
                                    <div class="pice_gray" >
                                        <div class="margin-bottom-5">
                                             <b class="margin-right-10">Giá khởi điểm:</b>
                                            <span class="title-price margin-right-10" style="color: red;font-size: 18px;">0 VND</span>
                                        </div> 
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Số lượng: </b>
                                            <span >5</span>
                                        </div> 
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Xuất xứ: </b>
                                            <span >Đức</span>
                                        </div>   

                                        <div class="margin-bottom-5">
                                            <b class=" margin-right-10">Giá thị trường: </b>
                                            <span >2.915.000 VND</span>
                                        </div>
                                        
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Thời gian diễn ra: </b>
                                            <span>15h - 16h (16 - 06 - 2016)</span>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Vị trí: </b>
                                            <span >Sảnh MERCURY</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-8 product-description">
                                <div class="overflow-h margin-bottom-5">
                                        <ul class="list-inline overflow-h taitro margin-bottom-10">
                                            <li><h4 class="title-price" >Đơn vị tài trợ</h4></li>
                                        
                                             <div class="pull-right">
                                                <img style="max-width: 190px;" src="images/daugia/logo_taitro.png" alt=""/>
                                            </div>
                                        </ul>
                                    <div class="margin-bottom-20">
                                        <b class="margin-right-10">Tính năng: </b>
                                        <span >
                                        <ul style="list-style-type: square; ">
                                            <li>-   4 cổng Ethernet.</li>
                                            <li>-   1 cổng USB (giao tiếp với máy in hay ổ trữ).</li>
                                            <li>-   2 cổng phone, hỗ trợ VoIP.</li>
                                            <li>-   Tương thích ADSL2/2+.</li>
                                            <li>-   Hỗ trợ DHCP, máy chủ ảo, DNS, DNS động, DMZ, UPnP.</li>
                                            <li>-   Hạn chế kết nối bằng lịch làm việc.</li>
                                            <li>-   Firmware phiên bản:57.04.34.</li>
                                      
                                             </ul>
                                        
                                        </span>
                                    </div>
                                    <ul class="list-inline add-to-wishlist margin-bottom-20">
                                        <li class="wishlist-in">
                                            <div class="fb-like" data-href="<?php echo $protocol.$server.$path;?>?id=fritzbox" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                        <li class="compare-in">
                                            <div class="fb-comments" data-href="<?php echo $protocol.$server.$path;?>?id=fritzbox&ip=<?php echo rand(0, 100000); ?>" colorscheme="light" data-numposts="1"></div>

                                        </li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div> 

                    <div class="list-product-description product-description-brd margin-bottom-30" id="maythanhtoan">
                        <div class="row">
                            <div class="col-sm-4">
                                <a><img class="img-responsive sm-margin-bottom-20" src="images/daugia/Maythanhtoan_mpos.jpg" alt=""></a>
                                <div>
                                    <ul class="list-inline overflow-h">
                                        <li><h4 class="title-price" ><a>MÁY THANH TOÁN MPOS</a></h4></li>
                                    </ul> 
                                    <div class="pice_gray" >
                                        <div class="margin-bottom-5">
                                             <b class="margin-right-10">Giá khởi điểm:</b>
                                            <span class="title-price margin-right-10" style="color: red;font-size: 18px;">0 VND</span>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Số lượng: </b>
                                            <span >2</span>
                                        </div>  
										 <div class="margin-bottom-5">
                                            <b class=" margin-right-10">Giá thị trường: </b>
                                            <span >2.629.000 VND</span>
                                        </div>
                                       
                                        
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Thời gian diễn ra: </b>
                                            <span>15h - 16h (16 - 06 - 2016)</span>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Vị trí: </b>
                                            <span >Sảnh MERCURY</span>
                                        </div>
                                        
                                    </div>
                                </div>


                            </div> 
                            <div class="col-sm-8 product-description">
                                <div class="overflow-h margin-bottom-5">
                                     <ul class="list-inline overflow-h taitro margin-bottom-10">
                                            <li><h4 class="title-price" >Đơn vị tài trợ</h4></li>
                                        
                                        <div class="pull-right">
                                            <img style="max-width: 160px;" src="images/daugia/maythanhtoanmpos.png" alt=""/>
                                        </div>
                                        </ul>
                                    <div class="margin-bottom-20">
                                    </div>
                                    <ul class="list-inline add-to-wishlist margin-bottom-20">
                                        <li class="wishlist-in">
                                            <div class="fb-like" data-href="<?php echo $protocol.$server.$path;?>?id=maythanhtoan" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                        <li class="compare-in">
                                            <div class="fb-comments" data-href="<?php echo $protocol.$server.$path;?>?id=maythanhtoan&ip=<?php echo rand(0, 100000); ?>" colorscheme="light" data-numposts="1"></div>
                                            
                                        </li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div>   
                    
                    <div class="list-product-description product-description-brd margin-bottom-30" id="pinsac">
                        <div class="row">
                            <div class="col-sm-4">
                                <a><img class="img-responsive sm-margin-bottom-20" src="images/daugia/Anker_EXA.jpg" alt=""></a>
                                <div>
                                    <ul class="list-inline overflow-h">
                                        <li><h4 class="title-price" ><a>PIN SẠC ANKER</a></h4></li>
                                    </ul> 
                                    <div class="pice_gray" >
                                        <div class="margin-bottom-5">
                                             <b class="margin-right-10">Giá khởi điểm:</b>
                                            <span class="title-price margin-right-10" style="color: red;font-size: 18px;">0 VND</span>
                                        </div> 
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Số lượng: </b>
                                            <span >10</span>
                                        </div>  

                                        <div class="margin-bottom-5">
                                            <b class=" margin-right-10">Giá thị trường: </b>
                                            <span >1.490.000 VND</span>
                                        </div>
                                        
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Thời gian diễn ra: </b>
                                            <span>15h - 16h (16 - 06 - 2016)</span>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Vị trí: </b>
                                            <span >Sảnh MERCURY</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-8 product-description">
                                <div class="overflow-h margin-bottom-5">
                                        <ul class="list-inline overflow-h taitro margin-bottom-10">
                                            <li><h4 class="title-price" >Đơn vị tài trợ</h4></li>
                                        
                                            <div class="pull-right">
                                                <img style="max-width: 125px;" src="images/daugia/pinsacanker.png" alt=""/>
                                            </div>
                                        </ul>
                                    <div class="margin-bottom-20">
                                        <b class="margin-right-10">Thông số Kỹ thuật: </b>
                                        <span >
                                        <ul class="a">
                                        	<li>- Capacity 26800mAh</li>
                                        	<li>- Output 5V / 4A (total)</li>
                                        	<li>- Input 5V / 2AWeight 485g / 17.1oz</li>
                                        	<li>- Size 166 × 80 × 22mm / 6.5 × 3.1 × 0.9in</li>
                                      
                                       		 </ul>
                                        
                                        </span>
                                    </div>
                                    <ul class="list-inline add-to-wishlist margin-bottom-20">
                                        <li class="wishlist-in">
                                            <div class="fb-like" data-href="<?php echo $protocol.$server.$path;?>?id=pinsac" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                        <li class="compare-in">
                                            <div class="fb-comments" data-href="<?php echo $protocol.$server.$path;?>?id=pinsac&ip=<?php echo rand(0, 100000); ?>" colorscheme="light" data-numposts="1"></div>
                                        </li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div>   

                    <div class="list-product-description product-description-brd margin-bottom-30" id="phieuhoc">
                        <div class="row">
                            <div class="col-sm-4">
                                <a><img class="img-responsive sm-margin-bottom-20" src="images/daugia/Phieuhoc_hackermutrang.jpg" alt=""></a>
                                <div>
                                    <ul class="list-inline overflow-h">
                                        <li><h4 class="title-price" ><a>PHIẾU HỌC HACKER MŨ TRẮNG</a></h4></li>
                                    </ul> 
                                    <div class="pice_gray" >
                                        <div class="margin-bottom-5">
                                             <b class="margin-right-10">Giá khởi điểm:</b>
                                            <span class="title-price margin-right-10" style="color: red;font-size: 18px;">0 VND</span>
                                        </div> 
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Số lượng: </b>
                                            <span >8</span>
                                        </div>  

                                       
                                        
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Thời gian diễn ra: </b>
                                            <span>15h - 16h (16 - 06 - 2016)</span>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Vị trí: </b>
                                            <span >Sảnh MERCURY</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-8 product-description">
                                <div class="overflow-h margin-bottom-5">
                                        <ul class="list-inline overflow-h taitro margin-bottom-10">
                                            <li><h4 class="title-price" >Đơn vị tài trợ</h4></li>
                                        
                                            <div class="pull-right">
                                                <img  style="max-width: 200px;" src="images/daugia/phieuhochacker.gif" alt=""/>
                                            </div>
                                        </ul>
                                    <div class="margin-bottom-20">
                                        <b class="margin-right-10">Chi tiết: </b>
                                        <span >
                                        <ul style="list-style-type: square; ">
                                        	<li>-	Thời gian học: 30 – 7 -2016</li>
                                        	<li>-	Nhận giấy chứng nhận Học Bổng Hacker Mũ Trắng – AEH</li>
                                        	<li>-	Trị giá: 2.950.000 vnđ</li>
                                     
                                       		 </ul>
                                        
                                        </span>
                                    </div>
                                    <ul class="list-inline add-to-wishlist margin-bottom-20">
                                        <li class="wishlist-in">
                                            <div class="fb-like" data-href="<?php echo $protocol.$server.$path;?>?id=phieuhoc" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                        <li class="compare-in">
                                            <div class="fb-comments" data-href="<?php echo $protocol.$server.$path;?>?id=phieuhoc&ip=<?php echo rand(0, 100000); ?>" colorscheme="light" data-numposts="1"></div>
                                        </li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <!-- <div class="list-product-description product-description-brd margin-bottom-30" id="domain">
                        <div class="row">
                            <div class="col-sm-4">
                                <a><img class="img-responsive sm-margin-bottom-20" src="images/daugia/Domain.jpg" alt=""></a>
                                <div>
                                    <ul class="list-inline overflow-h">
                                        <li><h4 class="title-price" >DOMAIN TPHCM.NET</h4></li>
                                    </ul> 
                                    <div class="pice_gray" >
                                        <div class="margin-bottom-5">
                                             <b class="margin-right-10">Giá khởi điểm:</b>
                                            <span class="title-price margin-right-10" style="color: red;font-size: 18px;">0 VND</span>
                                        </div> 
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Số lượng: </b>
                                            <span >1</span>
                                        </div>  

                                       
                                        
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Thời gian diễn ra: </b>
                                            <span>15h - 16h (16 - 06 - 2016)</span>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Vị trí: </b>
                                            <span >Sảnh MERCURY</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-8 product-description">
                                <div class="overflow-h margin-bottom-5">
                                      
                                     
                                    <div class="margin-bottom-20">
                                    </div>
                                    <ul class="list-inline add-to-wishlist margin-bottom-20">
                                        <li class="wishlist-in">
                                            <div class="fb-like" data-href="<?php echo $protocol.$server.$path;?>?id=domain" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                        <li class="compare-in">
                                            <div class="fb-comments" data-href="<?php echo $protocol.$server.$path;?>?id=domain&ip=<?php echo rand(0, 100000); ?>" colorscheme="light" data-numposts="1"></div>
                                            
                                        </li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div> -->
                    
                    <div class="list-product-description product-description-brd margin-bottom-30" id="touro">
                        <div class="row">
                            <div class="col-sm-4">
                                <a><img class="img-responsive sm-margin-bottom-20" src="images/daugia/touro.jpg" alt=""></a>
                                <div>
                                    <ul class="list-inline overflow-h">
                                        <li><h4 class="title-price" ><a>HGST Touro Mobile 500GB USB 3.0 External Hard Drive, Black</a></h4></li>
                                    </ul> 
                                    <div class="pice_gray" >
                                        <div class="margin-bottom-5">
                                             <b class="margin-right-10">Giá khởi điểm:</b>
                                            <span class="title-price margin-right-10" style="color: red;font-size: 18px;">0 VND</span>
                                        </div> 
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Số lượng: </b>
                                            <span >1</span>
                                        </div>  

                                        <div class="margin-bottom-5">
                                            <b class=" margin-right-10">Giá thị trường: </b>
                                            <span >1.250.000 VND</span>
                                        </div>
                                        
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Thời gian diễn ra: </b>
                                            <span>15h - 16h (16 - 06 - 2016)</span>
                                        </div>
                                        <div class="margin-bottom-5">
                                            <b class="margin-right-10">Vị trí: </b>
                                            <span >Sảnh MERCURY</span>
                                        </div>
                                        
                                    </div>
                                </div>




                            </div> 
                            <div class="col-sm-8 product-description">
                                <div class="overflow-h margin-bottom-5">
                                        <ul class="list-inline overflow-h taitro margin-bottom-10">
                                            <li><h4 class="title-price" >Đơn vị tài trợ</h4></li>
                                        
                                             <div class="pull-right">
                                                <img style="max-width: 201px;" src="images/daugia/hostvn.png" alt=""/>
                                            </div>
                                        </ul>
                                    <div class="margin-bottom-20">
                                        <b class="margin-right-10">Chi tiết: </b>
                                        <span >
                                        <ul style="list-style-type: square; ">
                                        	<li>-	Portable storage for all your digital files</li>
                                        	<li>-	Smooth, textured body for solid good looks.</li>
                                        	<li>-	Preformatted for PCs, easily reformatted for Macs.</li>
                                        	<li>-	USB 3.0 Interface and USB powered.</li>
											<li>-	2.5 inch External Hard Disk Drive</li>
											
                                       		 </ul>
                                        
                                        </span>
                                    </div>
                                    <ul class="list-inline add-to-wishlist margin-bottom-20">
                                        <li class="wishlist-in">
                                            <div class="fb-like" data-href="<?php echo $protocol.$server.$path;?>?id=touro" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                                        </li>
                                        <li class="compare-in">
                                            <div class="fb-comments" data-href="<?php echo $protocol.$server.$path;?>?id=touro&ip=<?php echo rand(0, 100000); ?>" colorscheme="light" data-numposts="1"></div>

                                        </li>
                                    </ul>
                                </div>    
                            </div>
                        </div>
                    </div>    
                      
                </div>
                <div class="clearfix">
						<a href="#popup" class="popup-with-move-anim btn-register" style="float: right; margin-top: 20px">Đăng ký</a>
				</div>

    </div>


    
    <footer>
    	<p>Công ty cổ phần VinaCIS - Copyright© 2016 VinaCIS</p>
        <p>Địa chỉ: 36 - Đường A4 - Phường 12 - Quận Tân Bình – Thành phố Hồ Chí Minh – Việt Nam</p>
        <p>Hotline: 0124.956.1111 - Email: cloud8@vinacis.com</p>
    </footer>


    
    <nav id="menu-responsive">
         <ul>
            <li>
				<a href="" title="" class="trans-hover">Day </a>
				<ul>
				
					<li><a href="http://cloud8.hostingday.vn/lan_6/day.html" title=""><i class="fa fa-caret-right"></i>Cloud 8 Lần 6</a></li>
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
					<li><a href="#intro" title="" class="active">Chương trình - Home page</a></li>
					<li><a href="day.html" title="">Cloud8 Day 6 </a></li>
					<li><a href="night.html" title="">Cloud8 Night 6 </a></li>
					<li><a href="exhibition.html" title="">Gian hàng - Exhibition</a></li>
					<li><a href="hinh-anh.html" title="">Hình ảnh</a></li>
					
				</ul>
			</li>
        </ul>
    </nav>
    
</div>    

<div id="popup" class="zoom-anim-dialog mfp-hide">
   	<iframe frameborder="0" width="600" height="600" style="max-width:100%; text-align:center; " align="center" src="https://ticketbox.vn/ticket-booking/61146/widget"></iframe>
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
	if(isset($_COOKIE['is_sent'])){
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
		setcookie('is_sent', '', time()-300);
		setcookie('msg', '', time()-300);
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
		
		var endTime =  Date.parse("2016/06/16 09:00:00 GMT +0700") / 1000;
		
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
		})
	})			
</script>	
</body>
</html>