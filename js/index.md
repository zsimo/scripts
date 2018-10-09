### load js script

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