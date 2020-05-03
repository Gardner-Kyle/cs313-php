function changeColor() {
	var div1 = document.getElementById("div1");
	var color = document.getElementById("colorText").value
	div1.style.backgroundColor = color
}

$(document).ready(function(){
  $("#fadeBtn").click(
  	function(){
		$("#div2").fadeToggle()
		$("#div3").fadeToggle()
	});
});

$(document).ready(function(){
  $("#fadeBtn2").click(
  	function(){
		$("#div3").fadeToggle()
		$("#div2").fadeToggle()
	});
});
