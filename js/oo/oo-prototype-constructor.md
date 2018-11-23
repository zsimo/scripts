#### import 2 separated instances
```js
// obj.js file

var sharedFunctions = {
    increment: function () {
        this.count ++;
    }
};

function creator () {
    /**
     * Qualsiasi parametro si passi, Object.create ritorna sempre un oggetto vuoto.
     */
    var newObj = Object.create(sharedFunctions);
    
    newObj.count = 0;
    
    return newObj;
}

module.exports = creator;

```
```js
// index.js file

var Obj = require("./obj");

var obj1 = Obj();
var obj2 = Obj();

obj1.increment();

console.log(obj1.count); // count -> 1
console.log(obj2.count); // count -> 0
```