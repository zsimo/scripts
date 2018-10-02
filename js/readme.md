### A collection of functional programming functions implementation

- MAP: creates a NEW array with the results of calling a provided function on every element in this array with out changing the original array
    ```js
    Array.prototype.map = Array.prototype.map || function(projectionFunction) {
    	var result = [];
    	this.forEach(function(item){
    		result.push(projectionFunction(item));
    	});
    	return result;
    };
    ```
- FILTER: creates a NEW array with all elements that pass the test implemented by the provided function
    ```js
    Array.prototype.filter = Array.prototype.filter || function(predicateFunction) {
        var result = [];
        this.forEach(function(item){
            if (predicateFunction(item)) {
                result.push(item);	
            }
        });
        return result;
    };
    ```
- CONCAT_ALL: flat a by-dimensional array 
    ```js
    // @examples
    // JSON.stringify([ [1,2,3], [4,5,6], [7,8,9] ].concatAll()) === "[1,2,3,4,5,6,7,8,9]"
    // [1,2,3].concatAll(); // throws an error because this is a one-dimensional array
    Array.prototype.concatAll = Array.prototype.concatAll || function() {
        var results = [];
        this.forEach(function(subArray) {
            subArray.forEach(function(item){
                results.push(item);
            });
        });
    
        return results;
    };
    ```
    
- CONCAT_MAP: replace any map follow by concatAll
    ```js
    Array.prototype.concatMap = function(projectionFunctionThatReturnsArray) {
        return this
            .map(function(item){
                return projectionFunctionThatReturnsArray(item);
            })
            // apply the concatAll function to flatten the two-dimensional array
            .concatAll();
    };
    ```
    
- REDUCE_ASYNC: usato quando serve considerare 2 elementi per volta di un array: returns a one value array
    ```js
    Array.prototype.reduceAsync = function(combiner, initialValue){
        var counter,
            accumulatedValue;
    
        // If the array is empty, do nothing
        if (this.length === 0) {
            return this;
        }
        else {
            // If the user didn't pass an initial value, use the first item.
            if (arguments.length === 1) {
                counter = 1;
                accumulatedValue = this[0];
            }
            else if (arguments.length >= 2) {
                counter = 0;
                accumulatedValue = initialValue;
            }
            else {
                throw "Invalid arguments.";
            }
    
            // Loop through the array, feeding the current value and the result of
            // the previous computation back into the combiner function until
            // we've exhausted the entire array and are left with only one function.
            while(counter < this.length) {
                accumulatedValue = combiner(accumulatedValue, this[counter]);
                counter++;
            }
    
            return [accumulatedValue];
        }
    };
    ```
    
- ZIP:
    ```js
    Array.prototype.zip = function(left, right, combinerFunction) {
        var counter,
            results = [];
    
        for(counter = 0; counter < Math.min(left.length, right.length); counter++) {
            // Add code here to apply the combinerFunction to the left and right-hand tems in the respective arrays
            results.push(combinerFunction(left[counter], right[counter]));
        }
    
        return results;
    };
    ```