const http = require('http');

const requestListener = function (req, res) {
  res.writeHead(200);
  res.end('Hello, World!');

  req.writeHead(404);
  req.end('Page Not Found');
}

const server = http.createServer(requestListener);
server.listen(8888);