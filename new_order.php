<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1> welcome to Sales</h1>
    <br>
    <form action="submit_sales.php" method="POST">
    <table width="1000px" style="margin: auto;">
        <thead>
            <tr style="background-color: grey; color:white;">
                <td>
                    SN
                </td>
                <td>
                    MENU
                </td>
                <td>
                    PRICE
                </td>
                <td>
                   QUANTITY
                </td>
                <td>
                    ACTION
                </td>
                <td>
                   TOTAL PRICE
                </td>
                
               
               
            </tr>
        </thead>
        <tbody>
       
        <?php 
        
        
            include('connect/connect.php');
            $query = "SELECT * FROM menu";
            $result = mysqli_query($connection,$query);
            while($rows = mysqli_fetch_assoc($result)){
               
               
              echo' 
              <tr>
                    <td> <input type="text" name="menu.id" value="'.$rows["id"].'"></td>
                    <td> <select name="menu.id">';
                
            
                ?>
                <?php
            
                include ('connect/connect.php');

                $query = "SELECT * FROM menu";
                $result = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<option value='.$row["id"].'>'.$row["foodname"].'</option>';
                }
               
                
                    ?>
               <?php
                echo '</select></td>
                  

    include ('connect/connect.php');

                      $query = "SELECT * FROM menu";
                      $result = mysqli_query($connection,$query);
                      while($row = mysqli_fetch_assoc($result)){
                          echo '<option value='.$row["id"].'>'.$row["foodname"].'</option>';
                      }
                     </select></td>
                    <td><input type="number" name="itemqty" value="'.$rows["qty"].'" readonly></td>
                    <td><input type="number" name="itemprice" value="'.$rows["price"].'" readonly></td>
                    <td><input type="number" name="sellqty" placeholder="Enter quanity"></td>
                    <td><button> Sell</button></td>
            </tr>
                ';
                $count++;
            }  
        ?> 
        </tbody>
        </tbody>
    </table>
    </form>
    <a href="sales.php">back</a>
</body>
</html>