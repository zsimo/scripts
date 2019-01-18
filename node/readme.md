#### extracting command line arguments [see](https://humanwhocodes.com/blog/2018/10/extracting-command-line-arguments-nodejs/)

```sh
node ./index.js ciao
```
```js
var [ bin, sourcePath, ...args ] = process.argv;
console.log(args[0]);   // "ciao"
```
```js
// omit unused variables
var [ , , ...args ] = process.argv;
console.log(args[0]);   // "ciao"
```

