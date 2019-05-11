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