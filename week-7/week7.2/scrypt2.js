function network()
{
	if(navigator.onLine)
	{
  		document.getElementsByTagName("img")[0].id = "loading";
  		
  		let news = document.querySelector("#cards");
  		if(document.getElementsByTagName("table").length>0)
  			document.getElementById("table").remove();
 		function onTextReady(text) 
		{	
			var table = document.createElement('table');
			table.id = "table";
			var list = JSON.parse(text);
			for(let i = 0;i<list.length;i++)
			{
 				var maker = list[i].maker;
 				var model = list[i].model;
 				var price = list[i].price;
 				var tr = document.createElement('tr');
 				var td1 = document.createElement('td');
 				var td2 = document.createElement('td');
 				var td3 = document.createElement('td');
 				td1.textContent = maker;
 				td1.style.width = '110px';
 				td2.textContent = model;
 				td2.style.width = '130px';
 				td3.textContent = price;
 				td3.style.width = '110px';
 				td3.className = "price";
 				tr.appendChild(td1);
 				tr.appendChild(td2);
 				tr.appendChild(td3);
 				table.appendChild(tr);
 			}
 			
 			news.appendChild(table);
		}
		function onResponse(response) 
		{
			return response.text();
		}
fetch(path1)
	.then(onResponse)
	.then(onTextReady);
  		
		console.log(news.children.length);

 	} 
 	else 
 	{
 		if(document.getElementsByTagName("table").length>0)
  			document.getElementById("table").remove();
  		document.getElementsByTagName("img")[0].id = "go";
 	}



}



document.querySelector("button").addEventListener("click",network);



path1 = "http://demo4296963.mockable.io/listCars";
