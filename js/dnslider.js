
$(document).ready(function(){
	$(".dns-img5").load(function(){
		$(".dns-ld").fadeOut(function(){
			$("#dnslider").fadeIn(function(){
				setTimeout(function(){
					dnslider(1);
				},7000)
			});
		});
	});
	
	$("#menut").click(function(){
		$("#menu").slideToggle();
	});
});
function dnslider(i){
	var a;
	if(i==5){
		i=0;
		a=5;
	}else{
		a=i;
	}
	$(".dns-bd"+a).fadeOut(function(){
		$(".dns-img"+(i+1)).fadeIn(function(){
			var j;
			if(i==0)
				j=5;
			else
				j=i;
			$(".dns-img"+j).fadeOut(function(){
				$(".dns-bd"+(i+1)).fadeIn();
				setTimeout(function(){
					dnslider(i+1);
				},7000)
			});
		});
		
	});
}

