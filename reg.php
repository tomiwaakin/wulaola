<?php
$un = $_POST['uname'];
$ad = $_POST['addr'];
$em = $_POST['mail'];
$pn = $_POST['phone'];
$pw = $_POST['pass'];
$rpw = $_POST['rpass'];
$hps = sha1($pw);


$connection = mysqli_connect("localhost","root","","gold");
if($connection){
    
     $chk = "SELECT * FROM reg WHERE uname = '$un'";
     $r = mysqli_query($connection,$chk);
     $num = mysqli_num_rows($r);
    echo $num;
      if($num > 0 ){
       echo "username not available";
        // header("location:error.php");
       
       
      }else{
              $query ="INSERT INTO reg (uname,addr,mail,phone,hpass)
      value ('$un','$ad','$em','$pn','$hps')";
    
      $result = mysqli_query($connection,$query);
      if($result){
        header("location:index.php");
      }else{
        echo mysqli_error($connection);
    
      }
      }

}else{
    echo "not contected";
}


?>