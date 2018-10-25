function onClick(){
	var b = event.currentTarget;
	b.dataset.status="done";
	console.log("sss");
}
var task = document.getElementById("tasks");
var buttons = task.getElementsByTagName("div");

for(var i=0;i<buttons.length;i++){
	buttons[i].addEventListener('click',onClick);
}
