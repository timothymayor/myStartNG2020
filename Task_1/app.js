var http = require('http');
var fs = require('fs');
var form = `<form action="/message"    method="POST">
    <input type="text" name="Message" placeholder="Message" id=""><br>
    <button class="btn btn-success">Submit</button>
    </form>`
http.createServer(function (req, res) {
  if(req.method == "POST"){ 
  let message = "";
req.on('data', (data)=>{
      message += data ;
   console.log(message);
    });
 req.on('end', () =>{
    fs.appendFile('message.txt', message , function (err) {
        if (err) throw err;
        console.log('Saved!');
      });
     });
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write(form);
    res.end();
} else {
res.writeHead(200, {'Content-Type': 'text/html'});
res.write(form);
res.end()
}}).listen(8080);