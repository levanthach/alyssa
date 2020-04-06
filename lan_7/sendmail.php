<?php
require("./include/class.phpmailer.php"); // nạp thư viện
   		 unset($_COOKIE['msg']);
  
     unset($_COOKIE['is_sent']);

   
$mailer = new PHPMailer(); // khởi tạo đối tượng
$mailer->IsSMTP(); // gọi class smtp để đăng nhập
$mailer->CharSet="utf-8"; // bảng mã unicode

//Đăng nhập Gmail
$mailer->SMTPAuth = true; // Đăng nhập
$mailer->SMTPSecure = "ssl"; // Giao thức SSL
$mailer->Host = "mail.vinacis.com"; // SMTP của GMAIL
$mailer->Port = 465; // cổng SMTP

// Phải chỉnh sửa lại
$mailer->Username = "cloud8@vinacis.com"; // GMAIL username
$mailer->Password = "@@Cl0ud@@VinaCI$"; // GMAIL password
$mailer->AddAddress('kieuvan@vinacis.com','contact'); //email người nhận
$mailer->AddCC('phamphuc@vinacis.com','contact'); //email người nhận
$mailer->AddBCC('giap@vinacis.com','contact'); //email người nhận

if($_POST["cus_fullname"]==""||$_POST["cus_email"]==""||$_POST["cus_phone"]=="") {
	
     $msg = "<script language='javascript' type='text/javascript'>alert('Vui lòng điền đầy đủ thông tin theo mẫu !');</script>";
 
	setcookie("msg", $msg, time()+60);
    header("Location: http://cloud8.hostingday.vn/lan_6"); 
	
     }
 else{
	 
    $email=$_POST['cus_email'];
    $email=filter_var($email, FILTER_SANITIZE_EMAIL);
    $email=filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email){
       $msg = "<script language='javascript' type='text/javascript'>alert('Vui lòng nhập đúng địa chỉ mail !');</script>";
	   
	  setcookie("msg", $msg, time()+10);
		header("Location: http://cloud8.hostingday.vn/lan_6"); 
     }
    else{

		$mailer->FromName = "cloud8@vinacis.com"; 
		$mailer->From = "cloud8@vinacis.com";
		$mailer->Subject = 'Đăng ký tham gia Cloud8 - Lần 6 - ' . $_POST['cus_fullname'];
		$mailer->IsHTML(false); //Bật HTML không thích thì false
		 
		$mailer->Body ="Họ Tên: " . $_POST['cus_fullname'] . "\n" .
             
			   "Điện Thoại: " . $_POST['cus_phone']. "\n" .
			   "Email: " . $_POST['cus_email'] . "\n" .
			   "Công ty: " . $_POST['cus_company'] . "\n" .
			   "Mục đích: Đăng ký tham dự chương trình \n" ; 
					 
    if(!$mailer->Send()) {
	 
    	 $msg = "Đăng ký không thành công, vui lòng thử lại";
		setcookie("msg", $msg, time()+5);
	    setcookie("is_sent", 0, time()+5);
		header("Location: http://cloud8.hostingday.vn/lan_6"); 
        #echo "Lỗi: " . $mailer->ErrorInfo;
                  }
        else{
				 
				$msg = "Cảm ơn Quý khách đã đăng ký tham dự. Chúng tôi sẽ liên hệ đến Quý Khách trong thời gian sớm nhất.";
				setcookie("is_sent", 1, time()+5);
				setcookie("msg", $msg, time()+5);
				header("Location: http://cloud8.hostingday.vn/lan_6"); 
            }

          }
		   
      }
 
  
  
 
 
?>