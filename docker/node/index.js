const http = require("http");


process.on('SIGINT', function() {
  console.log("exit");
    process.exit();
});

http
  .createServer(function(request, response) {
    console.log("request received");
    response.end("omg hi", "utf-8");
  })
  .listen(3000);
console.log("server started");