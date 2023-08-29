<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$r =  $_GET['id'];

$connection = mysqli_connect("localhost","root","","gold");
if($connection){
     $query = "SELECT * FROM reg  WHERE id='$r'";
     $result = mysqli_query($connection,$query);
     if($result -> num_rows > 0){
        
         while($row = $result->fetch_assoc()){
            
                $un = $row['uname'];
                $em = $row['mail'];
               
         }
  }
    
}else{
    echo "error";
}   
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="text" class="form-control"  name="id" readonly value="<?= $r ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="uname" readonly value="<?= $un ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="exampleInputlastname" name="mail" readonly value="<?= $em?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

</form>
</body>
</html>