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

#### write a module that can be used in the command line (run as script) and can be required
```sh
node ./file.js ciao 2
```
```js
var file = require("./file");
file("ciao", 2);
```
```js
// file.js

function print (par1, par2) {
    console.log(par1, par2);
}

if (require.main === module) {
    // run as script
    print(process.argv[2], process.argv[3]);
} else {
    // being required by other files
    module.exports = print;
}
```

#### show garbage collector activity
```js
node --trace_gc ./index.js
```

