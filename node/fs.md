#### create an empty file if it's not exists, without override it's content ("a") if already exists

```js
'use strict';
// see https://flaviocopes.com/how-to-create-empty-file-node/
fs.closeSync(fs.openSync(sqliteFile, "a"));
```