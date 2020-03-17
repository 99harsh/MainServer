var http = require('http');
var fs = require('fs');
var url = require('url');
var path = require('path');
var querystring = require('querystring');
const exec = require('child_process').exec;
var mysql = require('mysql');
http.createServer(function (req,res){
    if(req.url === '/create_ssh')
    {
        res.writeHead(200, {"Content-Type":"text/html"});
        fs.createReadStream("./public/create_ssh.php","UTF-8").pipe(res);
    }
    else if(req.url.match("\.php$"))
    {
        var phpPath = path.join(__dirname,'public',req.url);
        var fileStream = fs.createReadStream(phpPath, "UTF-8");
        res.writeHead(200,{"Content-Type":"text/php"});
        fileStream.pipe(res);
    }
    else if(req.url.match("\.css$")){
        var cssPath = path.join(__dirname,'public',req.url);
        var fileStream = fs.createReadStream(cssPath,"UTF-8");
        res.writeHead(200,{"Content-Type":"text/css"});
        fileStream.pipe(res);
    }
    else if(req.url.match("\.png$")){
        var imagePath = path.join(__dirname,'public',req.url);
        var fileStream = fs.createReadStream(imagePath);
        res.writeHead(200, {"Content-Type":"image/png"});
        fileStream.pipe(res);
    }
    if(res.method == "POST");
    {   
       
        var data = "";
        req.on("data",function(chunk){
            data += chunk;
            var form_data = querystring.parse(data);
            console.log(form_data.username); 
            console.log(form_data.password);
            console.log(form_data.confirm_password);
           // const myShellScript = exec('sudo ./create_user.sh '+form_data.server_username+' '+form_data.server_password+'');
          //const myShellScript = exec('sudo ./ls.sh');
           
          myShellScript.stdout.on('data', (data)=>{
                console.log(data); 
                // do whatever you want here with data
                var con = mysql.createConnection({
                    host: "192.168.0.4",
                    user: "MainServer",
                    password: "MainServer@123",
                    database: "litespeed"
                  });
                  
                /*  con.connect(function(err) {
                    if (err) throw err;
                    console.log("Connected!");
                  //  var sql = "INSERT INTO server_users (fname,lname,email,server_username,busy_status) VALUES ('"+form_data.fname+"','"+form_data.lname+"','""')";
                    var sql = "UPDATE server_users SET ssh_username='"+form_data.fname+"', ssh_password='"+form_data.lname+"'";
                  con.query(sql, function (err, result) {
                      if (err) throw err;
                      console.log("1 record inserted");
                    });
                  });*/
            });
            myShellScript.stderr.on('data', (data)=>{
                console.error(data);
            });   
            
        });
        console.log("ahajsd");
      
    }
   
    
}).listen(3000,"192.168.0.2");
