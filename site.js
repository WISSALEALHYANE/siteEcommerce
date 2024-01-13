

var MainImg = document.getElementById("main-img");
 var samllImg = document.getElementsByClassName("small-img");
 for(let i =0; i<=4; i++){
	samllImg[i].onclick = function(){
		MainImg.src = samllImg[i].src;
	}
 }