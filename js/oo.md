#### import a shared obj
```js
// obj.js file

var obj = {
    a: 0,
    increment: function () {
        this.a ++;
    }
};

module.exports = function () {
    return obj;
};
```
```js
// index.js file

var obj1 = require("./obj")();
var obj2 = require("./obj")();


obj1.increment();

console.log(obj1);
console.log(obj2);
```