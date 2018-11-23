#### import a shared object
```js
// obj.js file

var obj = {
    count: 0,
    increment: function () {
        this.count ++;
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

console.log(obj1); // count -> 1
console.log(obj2); // count -> 1
```

#### import 2 separated instances
```js
// obj.js file

module.exports = function () {
    var obj = {
        count: 0,
        increment: function () {
            this.count ++;
        }
    };
    
    return obj;
};
```
```js
// index.js file

var obj1 = require("./obj")();
var obj2 = require("./obj")();

obj1.increment();

console.log(obj1); // count -> 1
console.log(obj2); // count -> 0
```