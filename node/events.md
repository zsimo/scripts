### global.process is an event emitter

```js
process.on('exit', (code) => {
  // do one final synchronous operation
  // before the node process terminates

  console.log(`About to exit with code: ${code}`);
});
```

```js
process.on('uncaughtException', (err) => {
  // something went unhandled.
  // Do any cleanup and exit anyway!

  console.error(err); // don't do just that.

  // FORCE exit the process too.
  process.exit(1);
});
```