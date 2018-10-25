let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};
for(let country of countries){
			var selectItem = document.querySelector("select");
			var optionItem = document.createElement("option");
			optionItem.textContent = country;
			selectItem.appendChild(optionItem);
}
document.querySelector("#countries").addEventListener("change",onClick);


function onClick(){
	var b = event.currentTarget.value;
	document.getElementById("cities").length=1;
	for(let i=0;i<cities_by_country[b].length;i++){
		var selectItem = document.getElementById("cities");
		var optionItem = document.createElement("option");
		optionItem.textContent = cities_by_country[b][i];
		selectItem.appendChild(optionItem);
	}
}