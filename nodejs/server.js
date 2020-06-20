const express = require('express');
const app = express()

app.get('/', function(req, res) {
  res.send('Hello World!');
});

app.listen(3000, function() {
  console.log('Example app listening on port 3000!');
});

function getPrice() {
	var weight = document.getElementById('weight').value
	
	// switch statemen with radio information then multiplication 
	// and set document value with price.
}
