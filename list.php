<?php 
include_once ("private/db_connection.php");
$count = 0;
session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
//     echo "<script>alert('Password Not Matched')</script>";
// }else{
//     echo "<script>alert('Welcome Admin')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
    <header>
        <h1 align="center">Record System</h1>
    </header>
                   <div class="search">
                        <form action="result.php" method="get">
                            <input type="text" name="search" id="search">
                            <button type="submit">search</button>
                        </form> 
                    </div>
                    <a href="logout.php">
                   <h5>Logout</h5></a>
<a href="user.php">
<h5>Add new</h5></a>
        
            <table >
            <tr>
                  
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Gender</th>
                  <th>Image</th>
                  <th>Operation</th>

                  
              </tr>
                        <?php
                            $sql = "SELECT * FROM user ORDER BY id DESC";
                                $result = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_assoc($result)){
                                   // $id = $row['user_id'];
                                   $count++;
                                    
                                    echo '<tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['firstname'].'</td>
                                            <td>'.$row['lastname'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['address'].'</td>
                                            <td>'.$row['gender'].'</td>
                                            <td><img src='.$row['image'].'></td>
                                            
                                           
                                           
                                  
                                            

                                            <td>
                                                <button class="btn btn-primary">
                                                    <a href="update.php? updateid='.$row['id'].'">
                                                    Edit</a>
                                                </button>
                                                <button class="btn btn-danger">
                                                  <a href="delete.php? deleteid='.$row['id'].'">
                                                  Delete</a> 
                                                  </button>
                                            </td>
                                            
                                        </tr>';
                                } 

                                // Image display
                                // $sel = "SELECT * FROM user ORDER BY id DESC";
                                // $que = mysqli_query($conn,$sel);

                                // $output = "";

                                // if (mysqli_num_rows($que) < 1) {
                                //     $output = "<h4 class='text-center>No image uploaded</h4>";
                                // }
                                // while ($row = mysqli_fetch_assoc($que)){
                                //     $output = "<img src='<td>'.$row['image'].'</td>'> 
                                //     style='width:100px,height:100px'>";
                                   
                                // }
                                ?>

                                </table><br><br>
                                         
                                <!-- Recorded student -->
                                <div class="table_count">
                                   <div><?php echo $count ?>&nbsp;&nbsp;&nbsp; Records</div>
                                </div>

            <div class="panel-footer text-right">
         <small>&copy; ANDREMENT'Z</small>
     </div>
</body>
</html>