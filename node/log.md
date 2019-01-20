### log to file(s)

```js
'use strict';

var fs = require("fs");

var out = fs.createWriteStream("./info.log", {flags:'a'});
var err = fs.createWriteStream("./error.log", {flags:'a'});

var logger = new console.Console(out, err);

setInterval(() => {
    logger.info(new Date());
    logger.error(new Error("err"));
}, 2000);
```