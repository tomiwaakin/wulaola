<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
    margin: 00;
    padding: 00;
        }
        body{
            
          background-image: url(images/pexels-cats-coming-1907227.jpg);
            background-repeat: no-repeat;
            background-size: 100% 120%;
            color:white;
        }


        form{
            margin-top: 100px;
            width: 600px;
            height: 500px;
            text-align: center;
            border-radius: 15px;
            margin-left: 300px;
            padding: 50px;
        
        }
        
        
        button{
            margin-top: 30px;
            width: 300px;
            height: 40px;
            background-color: goldenrod;
            font-size: larger;
        }
        button:hover{
            
            width: 250px;
            height: 30px;
            background-color:gold;
            border-radius: 30px;
            font-size: x-large;
            transition: 1s;
        }
        input{
           width: 500px;
           height: 40px;  
           border-radius: 10px;
           margin-top: 30px;
        } 
        #reg{
            font-size:30px;
        }
        
        
        
    </style>

    
</head>

<body>
    
    <form method="post" action="loginng.php">
    <div id="div1">
         <h1 >Login page</h1>
    </div>
    <div id="div2">
        
         <input type="text" placeholder="uname" id="uname" name="uname"><br>
         <input type="password" placeholder="password" id="pass" name="pass"><br><br>
         <button style="margin-left: 100px;" onclick="return checkname()">Login</button>
         <br><br>
         <a href="signup.php" id="reg">Register here</a>

    </div>
   </form>
    <script>
        function checkname(){ 
            var un = document.getElementById("uname");
            var pw = document.getElementById("pass");

            if(un==""){
                alert("input name");
                return false;
            }

            if(pw==""){
                alert("input password");
                return false;
            }
        
        }
 </script>       
</body>
</html>