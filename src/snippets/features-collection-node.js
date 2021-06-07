// Node.js
veroLogger.addUser(1982, 'user@person.com', function (err, res, body) {
    if (err) return console.log(err);
    console.log(body); 
    // { status: 200, message: 'Success.' }
});