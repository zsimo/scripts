- Emit the number 7, then complete [see](http://reactivex.io/rxjs/class/es6/Observable.js~Observable.html#static-method-defer)
    ```js
    var result = Rx.Observable.empty().startWith(7);
    result.subscribe(x => console.log(x));
    ```



