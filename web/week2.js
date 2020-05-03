function changeColor() {
	var div1 = document.getElementById("div1");
	var color = document.getElementById("colorText").value
	div1.style.backgroundColor = color
}

$(document).ready(function(){
  $("#fadeBtn").toggle(
  	function(){
		$("#div3").fadeOut()
		$("#div2").fadeIn()
	},
	function(){
		$("#div2").fadeOut()
		$("#div3").fadeIn()
  });
});
