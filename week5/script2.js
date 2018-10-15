var carousel = document.getElementById('carousel');
var images = carousel.getElementsByTagName('img');
for(var i = 0; i < images.length; i++){
  images[i].addEventListener('click', image);
}
function image(){
  	var src  = String(event.currentTarget.getAttribute("src"));
  	var bigImage = document.getElementById("bigImage");
  	var img = bigImage.getElementsByTagName("img")[0];
  	img.setAttribute("src", src);
}
