$(function() {


setTimeout(function(){
	nortxt.style.display = "flex";
},1000)


setTimeout(function(){
	$("#nortxt").fadeOut("slow");
},2000)


setTimeout(function(){
	nortxt.style.display = "none";
	$("#big").fadeIn("slow");
},2700)


setTimeout(function(){
	logomenu.style.top = "0px";
	logomenu.style.transition = "3s";
},2750)


setTimeout(function(){
	hometext.style.left = "500px";
	hometext.style.transition = "3s";
},2750)


setTimeout(function(){
	$(".a1").fadeIn("slow");
	$(".txt").fadeIn("slow");
	$(".ftxt").fadeIn("slow");
	$(".toggle").fadeIn("slow");
	$(".logdiv").fadeIn("slow");
},5500)


})

