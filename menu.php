<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         form{
            margin-top: 60px;
            width: 600px;
            height: 500px;
            text-align: center;
            border-radius: 15px;
            border: solid goldenrod;
        margin-left: 400px;
            padding-top: 20px;
            
        
        }
          
        .form-control{
            width: 400px;
            height: 40px;
            margin-top: 20px;
            border-radius: 10px;
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
            transition: 2s;
        } 
    </style>
</head>
<body>
    
     <form action="enter_menu.php" method="post">
        <h2> Enter Menu</h2>
        <input type="text" placeholder="Enter food name" class="form-control" name="food">
        <input type="text" placeholder="Enter price"class="form-control" name="pri">
        <button>Enter</button>
       </form>

</body>
</html>