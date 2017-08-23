$(document).ready(function(){
	$("#btn_login").click(function(){
		$(this).button("loading");
		var em = $('#admin_email').val().trim();
		var ps = $('#admin_password').val().trim();
		if( em.length==0 ){
			$("#btn_login").button("reset");
			err("please input Email address..");
			return;
		}
		if( ps.length==0 ){
			$("#btn_login").button("reset");
			err("please input Password..");
			return;
		}
		$.post( 
				"/apna/admin/login.php", { email:em,password:ps} 
			).done(function(data){
				if(data=="success"){
					window.location = "/apna/admin/admin.php";
				}else if(data=="fail"){
					$("#btn_login").button("reset");
					$("#error_msg").text("Invalid Email or Password...");
				}else{
					$("#btn_login").button("reset");
					$("#error_msg").text("Server Error Occured...");
				}
			}).error( function(err,msg){
				alert(msg);
			} );
	});
});

function err(msg){
	$("#error_msg").text(msg);
}
