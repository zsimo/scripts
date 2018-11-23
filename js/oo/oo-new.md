#### import 2 separated instances
```js
// obj.js file

function creator () {
    this.count = 0;   
}

creator.prototype.increment = function () {
  this.count ++;
};

module.exports = creator;

```
```js
// index.js file

var Obj = require("./obj");

var obj1 = new Obj();
var obj2 = new Obj();

obj1.increment();

console.log(obj1.count); // count -> 1
console.log(obj2.count); // count -> 0