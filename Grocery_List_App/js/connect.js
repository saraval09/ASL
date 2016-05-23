/*var http = require('http');

var server = http.createServer(function(req, res) {
    res.writeHead(200);
    res.end('Hello Http');
});
server.listen(3306);*/

/*var mysql      = require('mysql');
var connection = mysql.createConnection({
    host     : 'localhost',
    user     : 'root',
    password : 'root',
    database : 'groceries'
});

connection.connect();

connection.query('SELECT * from items', function(err, rows, fields) {
    if (!err)
        console.log('The solution is: ', rows);
    else
        console.log('Error while performing Query.');
});

connection.end();*/

var mysql = require('mysql')

var connection = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'root',
    database: 'groceries'
});

connection.connect(function(err) {
    if (err) throw err
    console.log('You are now connected...')

    connection.query('CREATE TABLE people(id int primary key, name varchar(255), age int, address text)', function(err, result) {
        if (err) throw err
        connection.query('INSERT INTO people (name, age, address) VALUES (?, ?, ?)', ['Larry', '41', 'California, USA'], function(err, result) {
            if (err) throw err
            connection.query('SELECT * FROM people', function(err, results) {
                if (err) throw err
                console.log(results[0].id)
                console.log(results[0].name)
                console.log(results[0].age)
                console.log(results[0].address)
            })
        })
    })
})