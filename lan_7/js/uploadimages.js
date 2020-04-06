/**
 * 
 */

$(function() {
	$(":file").change(function() {
		if (this.files && this.files[0]) {
//			var reader = new FileReader();
//			reader.onload = imageIsLoaded;
//			reader.readAsDataURL(this.files[0]);
			//upload images
//				Sử dụng ajaxForm trong JQuery
					$("#imageform").ajaxForm({
						url : 'upload_image.php',
						type : 'post',
//	    				target: '#preview',
//	      				beforeSubmit:function(){ //việc cần làm trước khi submit
//	    	  				$("#imageloadstatus").show();
//	        				$("#imageloadbutton").hide();
//	      				},
						target: '#uploadcloud',
	      				success:function(){//việc cần làm khi submit thành công
//	    	  				$("#imageloadstatus").hide();
//	    	  				$("#imageloadbutton").show();
	      				},
	      				error:function(){//việc cần làm khi xảy ra lỗi
//	    	  				$("#imageloadstatus").hide();
//	    	  				$("#imageloadbutton").show();
	      				} 
	      	}).submit();
	    }
	});
});

function imageIsLoaded(e) {
	$('#uploadcloud').append(
			'<li class="col-lg-2 col-md-3 col-sm-4 col-xs-3"><a href="'
					+ e.target.result
					+ '"  data-source="" title="Gian hàng" ><img src="'
					+ e.target.result + '" alt=""/></a></li>');
	// 'src', e.target.result

};


