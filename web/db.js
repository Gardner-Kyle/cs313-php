const http = require('http');

http.createServer((request, response) => {
  request.on('error', (err) => {
    console.error(err);
    response.statusCode = 400;
    response.end();
  });
  response.on('error', (err) => {
    console.error(err);
  });
  if (request.method === 'POST') {
    request.pipe(response);
  } else {
    response.statusCode = 404;
    response.end();
  }
}).listen(8080);

function connect() {
  var con = pg.createConnection({
    host: "localhost",
    user: "kylegardner",
    password: "",
    database: "quotes"
  });

  con.connect(function(err) {
    if (err) throw err;
    con.query("SELECT * FROM user", function (err, result, fields) {
      if (err) throw err;
      console.log(result);
    });
  });
}
