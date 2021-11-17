<?php
include_once ("private/db_connection.php");
$id=$_GET['updateid'];
$sql="SELECT * FROM `user` WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$address=$row['address'];
$gender=$row['gender'];
$image=$row['image'];

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $image = $_POST['image'];
 
    $sql ="UPDATE  `user` set id=$id,firstname='$firstname',lastname='$lastname',
    email='$email',address= '$address',gender='$gender',image='$image'
    WHERE id=$id";
     $result = mysqli_query($conn,$sql);
      if ($result){
        // echo "updated successfully";
         header('location: list.php');
     }else {
        die('Connection Failed : '.$conn->connect_error);
     }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="css/update.css">
</head>
<body>
<div class="container">
            <header>
                <h1 >Edit record</h1>
            </header>
            <form action="" method="post">
                <label>First Name</label>
                <input type="text" name="firstname" placeholder="Enter Firstname"
                autocomplete="off" value="<?php echo $firstname?>" required><br><br>
                <label>Last Name</label>
                <input type="text" name="lastname" placeholder="Enter Lastname"
                autocomplete="off" value="<?php echo  $lastname?>" required><br><br>
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Email"
                autocomplete="off" value="<?php echo $email?>" required><br><br>
                <label>Address</label>
                <input type="text" name="address" placeholder="Enter Address"
                autocomplete="off" value="<?php echo $address?>" required><br><br>
                <label>Gender</label>
                <div>
                    <select name="gender" id=""value="<?php echo $gender?>" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                    </select>
                </div><br><br>
                        <!-- UPLOAD IMAGE -->
                    <div class="image">
                        <label>Upload Image</label>
                        <input type="file" name="image" class="form-control" required><br><br>
                       
                    </div><br><br>
                <button type="submit"name="submit">Update</button>
                
            </form>
    </div>      
</body>
</html>