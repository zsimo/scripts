#### create a stream with completion and error callback
```js
async function write () {
    process.stdout.write("ciao1");
    return process.stdout.write("ciao2");
}

write()
    .then(function () {
        console.log('All writes are now complete.');
        process.exit(0);
    })
    .catch(function (error) {
        console.error(error);
        process.exit(1);
    });

```

#### create a duplex stream
```js
const {Transform} = require("stream");
const fs = require('fs');
const readText = fs.createReadStream('long_file.txt');
const writeText = fs.createWriteStream('out.txt');


var start = Date.now();
const upperCase = new Transform({
    transform: function (chunk, encoding, callback) {
        this.push(chunk.toString().toUpperCase());
        callback();
    }
});
// the same as on("data")
const progress = new Transform({
    transform: function (chunk, encoding, callback) {
        process.stdout.write("#");
        callback(null, chunk);
    }
});
readText
.pipe(upperCase)
//.pipe(progress)
.on("data", function () {
    process.stdout.write(".");
})
.pipe(writeText)
.on("finish", function () {
    console.log("end", Date.now() - start);
});


```