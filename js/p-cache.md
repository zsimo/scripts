#### Base implementation of a `promise-based` `in-memory` cache with the only `get` method. [see](https://github.com/sindresorhus/promise-fun)

#### get values from form
```js
"use strict";

var NodeCache = require("node-cache");
var TTL = 1800; // seconds


var _cache = new NodeCache({
    stdTTL: 1800
});

/**
 * In-memory data cache with only the "get" method.
 *
 * @author Simone Sacchi
 * @version 2019/12/27
 */
module.exports = {
    get: _get
};

/**
 *
 * @param {string} key
 * @param {function} promise that resolve with data to be cached
 * @param {number} ttl optional custom ttl
 * @param {function} adapter a function that changes the data before it is cached
 * @returns {Object} data
 *
 * @author Simone Sacchi
 * @version 2019/12/27
 */
async function _get (key, promise, ttl, adapter) {

    if (!key) {
        return;
    }

    if (!_cache.has(key)) {
        var data = await promise;
        if (adapter && typeof adapter === "function") {
            data = adapter(data);
        }
        _cache.set(key, data, ttl);
    }

    return _cache.get(key);

}
```