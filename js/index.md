#### load js script

```js
function loadScripts (src, callback) {
    var script = document.createElement("script");
    script.src = src;
    if (callback && typeof callback === "function") {
        script.onload = callback;
    }
    document.body.appendChild(script);
}

// usage:
loadScripts("myScript.js", function () {
    console.log("loaded");
});
```

#### XHR prefetching [see](https://medium.com/dev-channel/a-netflix-web-performance-case-study-c0bcde26a9d9)

```js
// create a new XHR request
const xhrRequest = new XMLHttpRequest();
// open the request for the resource to "prefetch"
xhrRequest.open('GET', '../bundle.js', true);
// fire!
xhrRequest.send();
```