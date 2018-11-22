#### Inside a function, this is bound to the context from which the function was called
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

#### Check if the current scope if the global one

```js
if (this === window) {
    // global scope
}
```


