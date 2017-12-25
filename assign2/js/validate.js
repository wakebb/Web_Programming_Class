$(document).ready(function(){
    $("#username").after("<span id = 'username_info' class = 'info'>infoMessage</span>")
    $("#password").after("<span id = 'password_info' class = 'info'>infoMessage</span>")
    $("#email").after("<span id = 'email_info' class = 'info'>infoMessage</span>")

    $(".info").hide();

    $("#username").focus(function(){
     $("#username_info").show();
    });
    $("#password").focus(function (){
    	$("#password_info").show();
    });
    $("#email").focus(function (){
        $("#email_info").show();
    });
    
    $("#username").blur(function() {
        var value = $(this).val();
		if(value.length == 0){
			$("#username_info").hide();
		} else {
			var condition = value.match(/[^a-zA-Z0-9]/g);
			if ( condition == null) {
 				$("#username_info").addClass("ok").text("OK");
   			} 
   			else {
   				$("#username_info").addClass("error").text("Error");
   			}
		}
     }) ;



    $("#password").blur(function(){
		var value = $(this).val();
		if(value.length == 0){
         $("#password_info").hide();
         }
        else if (value.length > 0 && value.length < 8){
				$("#password_info").addClass("error").text("Error");
			} 
		else {
				$("#password_info").addClass("ok").text("OK");
		}
   		
	});


    $("#email").blur(function(){
		var value = $(this).val();
		var all= /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		
   		if ( value.length == 0 ) {
   			$("#email_info").hide();
   		} 
   		else if (all.test(value)) 
   		{
			 $("#email_info").addClass("ok").text("OK");
   		} 
   		else 
   		{
   			$("#email_info").addClass("error").text("Error");
   		}
	});
 });
