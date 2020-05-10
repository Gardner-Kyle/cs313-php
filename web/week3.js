var img1 = 0
var img2 = 0
var img3 = 0
var img4 = 0

function img1btn() {
	var val = document.getElementById("btn1");
	this.img1 += 1
	val.text.value = "+" + (img1 + 1).toString;
}

function img2btn() {
	var val = document.getElementById("btn2");
	this.img2 += 1
	val.text.value = "+" + (img2 + 1).toString;
}

function img3btn() {
	var val = document.getElementById("btn3");
	this.img3 += 1
	val.text.value = "+" + (img3 + 1).toString;
}

function img4btn() {
	var val = document.getElementById("btn4");
	this.img4 += 1
	val.text.value = "+" + (img4 + 1).toString;
}