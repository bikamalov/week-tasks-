const JSON_PATH = 'http://demo4296963.mockable.io/listCars';
const SORT_YEAR_ASC = function(a, b) {
  return a.price - b.price;
};

const SORT_ALPHA_TITLE = function(a, b) {
  const titleA = a.maker.toUpperCase();
  const titleB = b.maker.toUpperCase();
  if (titleA < titleB) { return -1; }
  if (titleA > titleB) { return 1; }
  return 0;
};
/////////////////////////////////////////////////////////////////////////////////////////////
class App {
  constructor() {
    this._onJsonReady = this._onJsonReady.bind(this);
    this._sortAlbums = this._sortAlbums.bind(this);
    
    const ascElement = document.querySelector('#sortByPrice');
    const ascButton = new SortButton(
      ascElement, this._sortAlbums, SORT_YEAR_ASC);
    const alphaElement = document.querySelector('#sortByMaker');
    const alphaButton = new SortButton(
      alphaElement, this._sortAlbums, SORT_ALPHA_TITLE);
  }
  
  _sortAlbums(sortFunction) {
    this.albumInfo.sort(sortFunction);
    this._renderAlbums();
  }
  
  _renderAlbums() {
    const albumContainer = document.querySelector('#cards');
    albumContainer.innerHTML = '';
    for (const info of this.albumInfo) {
      const album = new Album(albumContainer, info.maker,info.model,info.price);
    }
  }
  
  loadAlbums() {
    fetch(JSON_PATH)
        .then(this._onResponse)
        .then(this._onJsonReady);
  }

  _onJsonReady(text) {
  	console.log(JSON.parse(text));
    this.albumInfo = JSON.parse(text);

    this._renderAlbums();
  }

  _onResponse(response) {
    return response.text();
  }
}
////////////////////////////////////////////////////////////////////////////////////



class SortButton {
  constructor(containerElement, onClickCallback, sortFunction) {
    this._onClick = this._onClick.bind(this);
    this.onClickCallback = onClickCallback;
    
    this.sortFunction = sortFunction;
    containerElement.addEventListener('click', this._onClick);
  }
  
  _onClick() {
    this.onClickCallback(this.sortFunction);
  }
}

//////////////////////////////////////////////////////////////////
class Album {
  constructor(albumContainer, maker,model,price) {
    // Same as document.createElement('img');
    var div = document.createElement("div");
    var span1 = document.createElement("div");
    var span2 = document.createElement("div");
    var span3 = document.createElement("div");
    div.className = "card";
    span1.style.width = "140px";
    span2.style.width = "160px";
    span3.className = "price";
    span1.innerHTML = maker;
    span2.innerHTML = model;
    span3.innerHTML = price;
    div.appendChild(span1);
    div.appendChild(span2);
    div.appendChild(span3);
    albumContainer.append(div);
  }
}
///////////////////////////////////////////////////////////////////////
// script.js

function task3()
{
	if(navigator.onLine)
	{
		document.getElementsByTagName("img")[0].id = "loading";
		const app = new App();
		app.loadAlbums();
	}
	else{
		document.getElementsByTagName("img")[0].id = "go";
	}
}


document.getElementsByTagName("button")[0].addEventListener("click",task3);
