$(document).ready(function(){
	$("#contact_form_submit").click(function(){
		$(this).button("loading");
		var name = $('.contact[name="name"]').val();
		var email = $('.contact[name="email"]').val();
		var phone = $('.contact[name="phone"]').val();
		var subject = $('.contact[name="subject"]').val();
		var message = $('.contact[name="message"]').val();
		$.post("/apna/dc40f114/contact.php",{
			name:name,
			email:email,
			subject:subject,
			phone:phone,
			message:message,
			nothing:"dc40f114"
		},function(data,st){
			if(data=="success"){
				$("#contact_form_submit").hide();
				$("#contact_msg").text("Message Sent Successfully!!");
				$("#contact_msg").show();
			}else{
				$("#contact_form_submit").button("reset");
				$("#contact_msg").text("Message Not Sent!!");
				$("#contact_msg").slideDown();
			}
		});
	});
});