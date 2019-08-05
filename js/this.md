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




#### [Kyle Simpson](https://frontendmasters.com/courses/deep-javascript-v3/the-this-keyword/) this:
>A function's `this` references the execution context for that call,
determined entirely by `how` the function was called

A `this`-aware function can thus have a different context each time it's called, which makes it more flexible & reusable.

##### 4 ways to call a function
1. implicit binding:
    ```js
    // `this` is implicitly bind to the object on the left side of the `dot` notation
    var a = {
        b: "b",
        ask(c) {
            console.log(this.b, c);
        }
    };
    a.ask("ciao");
    ```
2. explicit binding:
    ```js
    // `this` is explicitly bind to the first parameter of the `call` function
    var a = {
        b: "b"
    };
  
    function ask(c) {
      console.log(this.b, c);
    }
    ask.call(a, "ciao");
    ```
3. hard binding:
    ```js
    // when th ask function will be executed, `this` is forced to be bound to
    // the parameter of the `bind` function
    var a = {
        b: "b",
        ask(c) {
            console.log(this.b, c);
        }
    };
   
    setTimeout(a.ask.bind(a), 10, "ciao");
    ```
   
4. new binding:
    ```js
    // to be done
    ```