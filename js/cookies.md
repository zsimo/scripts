#### CLient side cookies management [see](https://www.quirksmode.org/js/cookies.html)
###### be aware that the "httpOnly" setCookie attribute prevent to access to the document.cookie programmatically

#### get values from form
```js
// on submit
var cookies = {
    set: function(name, value, milliseconds) {
        if (milliseconds) {
            milliseconds = parseInt(milliseconds, 10);
            var date = new Date();
            //date.setTime(date.getTime()+(days*24*60*60*1000));
            date.setTime(date.getTime()+(milliseconds));
            var expires = "; expires="+date.toGMTString();
        }
        else var expires = "";

        document.cookie = name+"="+value+expires+"; path=/";
    },
    get: function(name) {
        return cookies.read(name);
    },

    ttl: function (name, milliseconds) {
        var value = cookies.get(name);
        cookies.set(name, value, milliseconds);
    },

    read: function(name) {

        if (!document.cookie) {
            return;
        }

        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }

    },

    delete: function(name) {
        cookies.set(name,"",-1);
    }
};
```

