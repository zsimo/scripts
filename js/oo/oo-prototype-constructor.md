#### import 2 separated instances
```js
// obj.js file

var sharedFunctions = {
    increment: function () {
        this.count ++;
    }
};

function constructor () {
    /**
     * Qualsiasi parametro si passi, Object.create ritorna sempre un oggetto vuoto.
     */
    var newObj = Object.create(sharedFunctions);
    
    newObj.count = 0;
    
    return newObj;
}

module.exports = constructor;

```
```js
// index.js file

var obj1 = require("./obj")();
var obj2 = require("./obj")();

obj1.increment();

console.log(obj1.count); // count -> 1
console.log(obj2.count); // count -> 0
```