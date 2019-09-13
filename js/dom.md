#### Centralized event handling [see](https://msdn.microsoft.com/en-us/magazine/hh273390.aspx)
```js
stateManager = {

    fly: function(){

        var self =  this;

        $('#container').unbind().bind("click", function(e){

            var target = $(e.originalTarget || e.srcElement);

            if(target.is("div.toggle")){

                self.handleClick(target);

            }

        });        

    },

    

    handleClick: function(elem){

        elem.find('span').toggle('slow');

    }

}

stateManager.fly();
```

#### get values from form
```js
// on submit
function onSUbmitCallback(event) {
    event.preventDefault();
    var name = event.target.name.value;

}
```