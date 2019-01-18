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


#### show how many cpus
```js
node -p "os.cpus()"
```

#### find a module without execute it
```js
require.resolve("my-module");
```