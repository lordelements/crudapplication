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
        <h1 align="center">Search record</h1>
    </header>
   
                    <div class="search">
                        <form action="result.php" method="get">
                            <input type="text" name="search" id="search">
                            <button type="submit">search</button>
                        </form> 
                    </div>
                    <a href="list.php">
                   <h5>Back</h5></a>
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
 
include_once ("private/db_connection.php");
$search = $_GET['search'];
$sql = "SELECT * FROM user WHERE firstname LIKE '%$search%' ORDER BY id DESC";
$result = $conn->query($sql) or die ($conn->error);
while ($row = mysqli_fetch_assoc($result)){
    
    
    echo '<tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['firstname'].'</td>
                                            <td>'.$row['lastname'].'</td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['address'].'</td>
                                            <td>'.$row['gender'].'</td>
                                            <td><img src='.$row["image"].'></td>

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
?>

<table>
</body>
</html>