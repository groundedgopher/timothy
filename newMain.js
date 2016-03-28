/**
 * Created by tsmith on 3/26/2016.
 */

var http = require("http");

http.createServer(function (request, response) {

    response.writeHead(200, {'Content-Type': 'text/plain'});

    response.end('Hello World\n');
}).listen(8000);

console.log('Server running at something');