let cars = [
	{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},
	{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},
	{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}
			];

			let car = document.getElementById('cars');
			let A = 0;
			let B = 0;
			let C = 0;
			let num =0;
			let z=0;
			var price = [];
for(let i=0;i<cars.length;i++){
	let brand = cars[i]["brand"];
	let model = cars[i]["model"];
	let image = cars[i]["image_url"];
	let money = cars[i]['price'];

	price[i]=money;

	let name = brand;
	let div1=document.createElement("div");
	let div2=document.createElement("div");
	let img = document.createElement("img");
	let marka=document.createElement("span");
	marka.textContent=name;
	marka.style.fontSize = 25+"px";
	img.src=image;
	let basket = document.createElement("img");
	basket.classList.add("basket");
	basket.src = "dollar.png";
	img.style.width = 100+"px";
	//img.style.height = 90+"px";

	basket.style.width = 20+"px";
	basket.style.height=20+"px";
	basket.setAttribute('data-bool', i);
	basket.addEventListener('click',change);
	div1.appendChild(basket);
	div1.appendChild(img);
	div1.appendChild(marka);
	div1.classList.add("card");
	div2.appendChild(div1);
	
	car.appendChild(div2);
	
}
function change(){
	console.log(123);
	let image3 = event.currentTarget;
	var q = image3.getAttribute('data-bool');
	if (q==0) {
			if (A==0) {
				image3.src="shop.png";
				num+=1;
				z+=price[0];
				A=1;
			}
			else {
				image3.src="dollar.png";
				num-=1;
				z-=price[0];
				A=0;
			}
	}
	if (q==1) {
			if (B==0) {
				image3.src="shop.png";
				num+=1;
				z+=price[1];
				B=1;
			}
			else {
				image3.src="dollar.png";
				num-=1;
				z-=price[1];
				B=0;
			}
	}
	if (q==2) {
			if (C==0) {
				image3.src="shop.png";
				num+=1;
				z+=price[2];
				C=1;
			}
			else {
				image3.src="dollar.png";
				num-=1;
				z-=price[2];
				C=0;
			}
	}
	document.getElementById('items').textContent = num;
	document.getElementById('sum').textContent = z;
}