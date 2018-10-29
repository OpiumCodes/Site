var slideIndex = 1;
var flag=0;

showSlide(slideIndex);

function plusSlides(n){
	showSlide(slideIndex += n);
}

function plusSlides1(n){
	showSlide(slideIndex += n);
	flag=1;
}

function currentSlide(n) {
	showSlide(slideIndex = n);
	flag=1;
}

function showSlide(n){
	var i;
	var slides = document.getElementsByClassName("hidden");
	var dots = document.getElementsByClassName("dots");
	
	if(n==1){
		document.getElementById("news1").style.color = "red";
		document.getElementById("news2").style.color = "white";
		document.getElementById("news3").style.color = "white";
		document.getElementById("news4").style.color = "white";
	}
	if(n==2){
		document.getElementById("news1").style.color = "white";
		document.getElementById("news2").style.color = "red";
		document.getElementById("news3").style.color = "white";
		document.getElementById("news4").style.color = "white";
	}
	if(n==3){
		document.getElementById("news1").style.color = "white";
		document.getElementById("news2").style.color = "white";
		document.getElementById("news3").style.color = "red";
		document.getElementById("news4").style.color = "white";
	}
	if(n==4){
		document.getElementById("news1").style.color = "white";
		document.getElementById("news2").style.color = "white";
		document.getElementById("news3").style.color = "white";
		document.getElementById("news4").style.color = "red";
	}
	
	if (n > slides.length) { 
		slideIndex = 1
	};
	if (n < 1) { 
		slideIndex = slides.length
	};
	for (i=0;i<slides.length;i++) {
		slides[i].style.display = "none";
	};
	for (i=0;i<dots.length;i++) {
		dots[i].className = dots[i].className.replace(" active","");
	};

	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
}




var time=4000;
function roflmfaolol()
{
	if(flag==0){
		plusSlides(1);
		setTimeout("roflmfaolol()",time);
	};
}



 function changeImg(){
	setTimeout("roflmfaolol()",4000);
}
window.onload=changeImg;



var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
