var pg = require('pg');

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