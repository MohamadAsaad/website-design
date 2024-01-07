
// Require the mysql module
var mysql = require('mysql');

// Create a connection object
var con = mysql.createConnection({
host: "localhost",
user: "yourusername",
password: "yourpassword"
});

// Connect to the database
con.connect(function(err) {
if (err) throw err;
console.log("Connected!");
});