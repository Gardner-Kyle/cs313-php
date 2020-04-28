function clicked() {
	window.alert("Clicked!");
}

function changeColor() {
	var div1 = document.getElementById("div1");
	var color = document.getElementById("colorText").value
	div1.style.backgroundColor = color
}
