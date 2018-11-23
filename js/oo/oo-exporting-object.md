#### import a shared object
```js
// obj.js file

var obj = {
    count: 0,
    increment: function () {
        this.count ++;
    }
};

module.exports = obj;
```
```js
// index.js file

var obj1 = require("./obj");
var obj2 = require("./obj");

obj1.increment();

console.log(obj1); // count -> 1
console.log(obj2); // count -> 1
```

#### import 2 separated instances
```js
// obj.js file

var obj = {
    count: 0,
    increment: function () {
        this.count ++;
    }
};

module.exports = obj;
```
```js
// index.js file

var obj1 = Object.create(require("./obj"));
var obj2 = Object.create(require("./obj"));

obj1.increment();

console.log(obj1.count); // count -> 1
console.log(obj2.count); // count -> 0
```