##### see [Axel Rauschmayer](http://2ality.com/2014/09/es6-modules-final.html), [Nicolás Bevacqua](https://ponyfoo.com/articles/es6-modules-in-depth#the-es6-module-system) and also [webpack](https://webpack.js.org/concepts/modules/)

### Export

- CommonJS
    ```js
    module.exports = 1
    module.exports = NaN
    module.exports = 'foo'
    module.exports = { foo: 'bar' }
    module.exports = ['foo', 'bar']
    module.exports = function foo () {}
    ```
    
- ES6
    ```js
    export default 1
    export default NaN
    export default 'foo'
    export default { foo: 'bar' }
    export default ['foo', 'bar']
    export default function foo () {}
    ```
    
### Import

- CommonJS
    ```js
    var _ = require('lodash')
    ```
    
- ES6
    ```js
    // import the default exported binding
    import _ from 'lodash'
    // import named exports
    import {map, reduce} from 'lodash'
    // use aliases to rename imported bindings
    import {cloneDeep as clone, map} from 'lodash'
    // mix and match named exports and the default export
    import {default, map} from 'lodash'
    import {default as _, map} from 'lodash'
    import _, {map} from 'lodash'
    // import the module as an object (with one property per named export)
    import * as _ from 'lodash'
    ```