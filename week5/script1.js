function det(){
var determinant = (arr[0].value*((arr[4].value*arr[8].value) - (arr[5].value *   arr[7].value))) - 
(arr[1].value*((arr[3].value*arr[8].value) - (arr[5].value * arr[6].value))) +
(arr[2].value*((arr[3].value*arr[7].value) - (arr[4].value * arr[6].value))); 
document.querySelector('#result').innerHTML = determinant;
console.log(determinant);
}
var arr = document.querySelectorAll('input');
document.querySelector('#determinant').addEventListener('click',det);