// reset array
a =[1, 2];

a.length = 0; // fast
a.lenght = []; // slow


// forEach (IE9)
// ciclare su un array
var arr = [1, 2, 3, 4];
var obj = {
	"uno-chiave": "uno-valore",
	"due-chiave": "due-valore",
	"tre-chiave": "tre-valore"
};

var callBack = function (value, index, i_array) {
	console.log(value);
	console.log(index);
	console.log(i_array);
};
arr.forEach(callBack);
console.log("*******************");
// ciclare su un oggetto

Object.keys(obj).forEach(callBack);