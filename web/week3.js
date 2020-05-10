var img1 = 0
var img2 = 0
var img3 = 0
var img4 = 0

function img1btn() {
	var val = document.getElementById("btn1");
	this.img1 += 1
	val.innerHTML = "+" + img1;
}

function img2btn() {
	var val = document.getElementById("btn2");
	this.img2 += 1
	val.innerHTML = "+" + img2;
}

function img3btn() {
	var val = document.getElementById("btn3");
	this.img3 += 1
	val.innerHTML = "+" + img3;
}

function img4btn() {
	var val = document.getElementById("btn4");
	this.img4 += 1
	val.innerHTML = "+" + img4;
}

function toCart() {
	if this.img1 < 1 {
		var val = document.getElementById("ch_img1");
		val.style.visibility = 'hidden';
	}
	if this.img2 < 1 {
		var val = document.getElementById("ch_img2");
		val.style.visibility = 'hidden';
	}
	if this.img3 < 1 {
		var val = document.getElementById("ch_img3");
		val.style.visibility = 'hidden';
	}
	if this.img4 < 1 {
		var val = document.getElementById("ch_img4");
		val.style.visibility = 'hidden';
	}
}