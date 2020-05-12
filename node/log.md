
#### log to file while starting the service
```bash
node my_app.js > my_app_log.log 2> my_app_err.log
```


#### log to file via script

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


