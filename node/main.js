/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);


app.get('/', function(req, res){
    res.sendFile(__dirname + '/index.html');
});

io.on('connection', function(socket){
    console.log('a user connected');
    socket.on('disconnect', function(){
        console.log('user disconnected');
    });
});

http.listen(8081, function(){
    console.log('listening on *:8081');
});
//http.createServer(function (request, response) {
//
//   // Send the HTTP header 
//   // HTTP Status: 200 : OK
//   // Content Type: text/plain
//   response.writeHead(200, {'Content-Type': 'text/plain'});
//   
//   // Send the response body as "Hello World"
//   response.end('Hello World\n');
//}).listen(8081);
//
//// Console will print the message
//console.log('Server running at something');




