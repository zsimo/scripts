#### [Kyle Simpson](https://frontendmasters.com/courses/deep-javascript-v3/what-is-closure/) Closure definition:
>Closure is when a function “remembers” its
lexical scope even when the function is
executed outside that lexical scope

Closure non chiude sopra un valore ma sopra mantiene l'accesso a una variabile, con tutte le sue future mutazioni
#### function declaration
```js
// "function" is the first word of the statement
function a () {
    
}
```

#### function expression
```js
// the "a" of the named function is own scope and it's shadowing the global "a"
// and it's also a read only property 
// see https://frontendmasters.com/courses/deep-javascript-v3/naming-function-expressions/
var a = function a () {
    
}
```