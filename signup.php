<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
            
        }

#header{
    width: 100%;
    height: 20px;
    background-color: orange;
    gap: 8px;


}
nav{
    display: flex;
    
}
#home{
    display: flex;
    gap: 15px;
    margin-left: 15px;
    
}
li{
    list-style: none;
}
li a{
    text-decoration: none;
}
#sig{
    display: flex;
    gap:70px;
    margin-left: 900px;
}
        form{
            margin-top: 50px;
            width: 600px;
            height: 500px;
            text-align: center;
            border-radius: 15px;
            margin-left: 400px;
            margin-top: 50px;
        
        }
        
        .form-control{
            width: 400px;
            height: 40px;
            margin-top: 20px;
            border-radius: 10px;
            text-align:left;
            padding-left: 15px;
            font-size: 15px;
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
        
        marquee{
            color: goldenrod;
            font-size: larger;
        } 
        #pri{
          margin-left: 500px;
          font-size: larger;
        }
        .text-center{
          margin-left: 500px;
          font-size: 30px;
        }
        
        
    </style>
</head>
<body>
        <div>
            <form action="reg.php" method="post">
              <?php echo "username not available";?>
                    <h1>Registration Page</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="User name" name="uname" id="uname">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="adderss" name="addr" id="addr">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="mail" id="mail">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>  
                  
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" placeholder="phone number" name="phone" id="phone">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-user"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="pass" id="pass">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Re_enter Password" name="rpass" id="rpass">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <button onclick =" return chk()">submit</button>
                       </form>
        </div>  
      
  
        <a href="login.php" class="text-center">I already have a membership</a>
      </div>
        
        
        <script>
    function chk(){
        var fn = document.getElementById('fname').value;
        var ad = document.getElementById('addr').value;
        var em = document.getElementById('mail').value;
        var pn = document.getElementById('phone').value;
       var pw = document.getElementById('pass').value;
        var cpw = document.getElementById('rpass').value;

        if(fn == ""){
            alert("Name required");
            return false;
        }
        if(em == "" ){
            alert("Email required");
            return false;
        }
        if(pn== "" ){
            alert("phone number required");
            return false;
        }
        if(pw !="" && cpw !=""){
            if(pw != cpw){
                alert("password do not match!");
                return false;
            }
            if(pw .length <8){
              alert("password too small");
                return false;
            }
        }

        
    }
    </script>
    </body>
</html>