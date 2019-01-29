// app/routes.js

// grab the nerd model we just created
var Sample = require('./models/sample');

   module.exports = function(app) {

       // server routes ===========================================================
       // handle things like api calls
       // authentication routes

       // sample api route //Show all records
       app.get('/api/show', function(req, res) {
           Sample.find(function(err, samples) {
               // if there is an error retrieving, send the error.
               // nothing after res.send(err) will execute
               if (err)
                   res.send(err);
               console.log('samples', samples);
               res.json(samples);
           });
       });

    
       //Insert a record
       app.post('/api/insert', function(req, res) {
           console.log(req.body.message);
           console.log(req.body.messageID);
           //var rec = new Sample(req.body);
           var rec = new Sample({messageID: req.body.messageID, message: req.body.message});
           rec.save(function(err,n){
               if (err)
                   console.log('saving failed');
               console.log('saved '+ n.messageID + n.message);
           });
       });


       // route to handle creating goes here (app.post)
       // route to handle delete goes here (app.delete)
       // Delete a record
       app.post('/api/update', function(req, res) {
           var id = req.body.messageID;
           var message = req.body.message;
             Sample.findOneAndUpdate( {"messageID" : id}, {"message": message}, function(err,n){
               if (err)
                   console.log('updating failed');
               console.log('Updated '+ n.messageID + n.message);
           });
       });

       //Update a record
       app.post('/api/delete', function(req, res) {
           var id = req.body.messageID;
           var messageID = req.body.message;
           Sample.findOneAndDelete( {"messageID" : id}, function(err,n) {
              if (err) 
                console.log('Deleting failed');
            console.log('Deleted messageID:'+n.messageID);
           });
       });

       // Get specific message by id
       app.post('/api/findByID', function(req, res) {
            var id = req.body.messageID;
            Sample.findOne({"messageID" : id}, function(err,Sample){
              if(err)
                console.log('Finding failed');
            console.log('Found message');
            res.json(Sample);
            });
       });

       // Get by message 
        app.post('/api/findByMassage', function(req, res) {
            var message = req.body.message;
            Sample.findOne({"message" : message}, function(err,Sample){
              if(err)
                console.log('Finding failed');
            console.log('Found ID');
            res.json(Sample);
            });
       });

       // });

       // frontend routes =========================================================
       // route to handle all angular requests
       app.get('/', function(req, res) {
           res.sendfile('./public/views/index.html'); // load our public/index.html file
       });

   };






// SERVER ROUTES API's:

// 1.    Show all records

// localhost:8080/api/show

// 2.    Insert a record

// localhost:8080/api/insert

// 3.    Update a record

// localhost:8080/api/update/:id

// Example: localhost:8080/api/update/4

// 4.    Delete a record

// localhost:8080/api/delete/:id

// Example: localhost:8080/api/delete/2

// 5.    Get specific message by id

// localhost:8080/api/show/:id

// Example: localhost:8080/api/show/1

// 6.    Get by message 

// localhost:8080/api/show?message=abc

// These would be your api's

// now you need to call these api's from jquery
// on UI side you can have delete/update button's
// to get by id you can have a test field with search button which calls a jquery function and then ajax call to api
// Please let me know of you have any other questions
// :id if the id which you will be dynamically passing i.e the id of the record to be updated/deleted
// So basically you need to have id's of the message hidden on the UI so that you can use the id's to update/delete the corresponding record