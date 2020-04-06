/**
* toggle sub list of agenda
*/
function toggle_sub_agenda_list(btn){
	var $sub_list = ($(btn).parent().siblings('.white.sub').length > 0)?$(btn).parent().siblings('.white.sub') : $(btn).siblings('.white.sub');

	if ($sub_list.is(':hidden')){
		$sub_list.slideDown();
		$(btn).find('i').attr('class', 'fa fa-minus');
	} else {
		$sub_list.slideUp();
		$(btn).find('i').attr('class', 'fa fa-plus');
	}
}

//
function window_onload(){
	$('.btn_toggle_agenda_sub_list').unbind('click');
	$('.btn_toggle_agenda_sub_list').bind('click', function(){
		toggle_sub_agenda_list(this);
	});

	var id = getParam('id');

	if(id){
		$('html, body').animate({
        	scrollTop: $('#'+id).offset().top
 		}, 2000);
	}
}

$('#server')
function getParam(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
       return null;
    }
    else{
       return results[1] || 0;
    }
}

function readmore(){
	$('#intel-server').show();
	$('#more').hide();
	$('#less').show();
}

function readless(){
	$('#intel-server').hide();
	$('#more').show();
	$('#less').hide();
}

function select_field(e){
	if (e == 1) {
		$('.content-vinacis').show();
		$('.content-cyberagent').hide();
		$('.content-cmc').hide();
	} else if(e == 2){
		$('.content-vinacis').hide();
		$('.content-cmc').hide();
		$('.content-cyberagent').show();
	} else if(e == 3){
		$('.content-vinacis').hide();
		$('.content-cyberagent').hide();
		$('.content-cmc').show();
	}
}



//
window.onload = window_onload;
