#### Inside a function, this is bound to the context from which the function was called (the left side of the dot notation)
```js
<script>
// this is bound to the global scope
function Fa () {
    this.x = 1;
}
Fa();
window.x; // 1
</script>
```
```js
<script>
// this is bound to the object ({} block scope)
var obj = {
    a: 1,
    m: function () {
        this.a ++;
    }
};
obj.m(); 2
</script>
```


#### this inside a function in case of the left side of the dot notation is empty: undefined in strict mode, otherwise window
```js
"use strict";

function foo() {
    console.log(this); // undefined
}
foo();
```
```js
function foo() {
    console.log(this); // window
}
foo();
```

#### Check if the current scope if the global one

```js
if (this === window) {
    // global scope
}
```


