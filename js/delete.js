// http://bonsaiden.github.io/JavaScript-Garden/#core.delete
// node delete.js


// variabile e funzioni globali non possono essere cancellate

// le propieta di un oggetto si
var a = {};
a.uno = "pippo 1";
a.due = "pippo 2";

console.log(a);
console.log(delete a.uno); // return true
console.log(a);
console.log(a.uno); // undefined