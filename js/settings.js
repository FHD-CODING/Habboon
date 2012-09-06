function block_newfriends(){
	$('#block_newfriends').fadeOut();
	$.get("/system/account/block_newfriends.cfm", function(data) {
		if( $.trim(data) == "fail" ) {
			$('#block_newfriends').html("Session timed out - log back in to update your settings");
		} else {
			$('#block_newfriends').html($.trim(data));
		}
	});
	$('#block_newfriends').fadeIn();
}

function hide_online(){
	$('#hide_online').fadeOut();
	$.get("/system/account/hide_online.cfm", function(data) {
		if( $.trim(data) == "fail" ) {
			$('#hide_online').html("Session timed out - log back in to update your settings");
		} else {
			$('#hide_online').html($.trim(data));
		}
	});
	$('#hide_online').fadeIn();
}

function hide_inroom(){
	$('#hide_inroom').fadeOut();
	$.get("/system/account/hide_inroom.cfm", function(data) {
		if( $.trim(data) == "fail" ) {
			$('#hide_inroom').html("Session timed out - log back in to update your settings");
		} else {
			$('#hide_inroom').html($.trim(data));
		}
	});
	$('#hide_inroom').fadeIn();
}

function accept_trading(){
	$('#accept_trading').fadeOut();
	$.get("/system/account/accept_trading.cfm", function(data) {
		if( $.trim(data) == "fail" ) {
			$('#accept_trading').html("Session timed out - log back in to update your settings");
		} else {
			$('#accept_trading').html($.trim(data));
		}
	});
	$('#accept_trading').fadeIn();
}


$(document).ready(function(){

});