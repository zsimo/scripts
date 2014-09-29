// reset array
a =[1, 2];

a.length = 0; // fast
a.lenght = []; // slow


// forEach (IE9)
// ciclare su un array
var arr = [1, 2, 3, 4];
var callBack = function (value, index, i_array) {
	console.log(value);
	console.log(index);
	console.log(i_array);
};
arr.forEach(callBack);

// ciclare su un oggetto
var obj = {
	"uno-chiave": "uno-valore",
	"due-chiave": "due-valore",
	"tre-chiave": "tre-valore"
};
Object.keys(obj).forEach(callBack);