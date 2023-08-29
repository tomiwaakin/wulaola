<?php 
session_start();

$un =$_POST['uname'];
$pword =$_POST['pass'];
$hps = sha1($pword);



$connection = mysqli_connect('localhost', 'root', "", 'gold');
if($connection){
    $query = "SELECT * FROM reg WHERE uname = '$un' AND hpass = '$hps'";
    $result = mysqli_query($connection,$query);

    if($result){
        echo $result->num_rows;
        if($result->num_rows > 0){

                    while($row = $result->fetch_assoc()){
                    
                        
                        $uname = $row['uname'];
                    

                        $_SESSION['uname'] = $uname;

                       
                }
                
      }else{
       header("location:error2.php");
    }
     header("location:dashboard.php");
}else{
echo mysqli_error($connection);

}
}
else{
    echo "not connected",mysqli_error();
}
?>