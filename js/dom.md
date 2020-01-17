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

#### from html string to html dom element [see](https://github.com/zsimo/frameworkless-frontend-development-workshop/blob/master/toolkit/rendering/functions/src/utils/dom.js)
```js

function htmlToElement (html) {
  var template = document.createElement('template');
  template.innerHTML = html;
  return template.content.firstChild;
}

console.log(htmlToElement("<h1>ciao</h1>"));
```