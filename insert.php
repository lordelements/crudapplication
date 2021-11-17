<?php
include_once ("private/db_connection.php");

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $image = $_POST['image'];

   //  Image upload 
   if (isset($_POST['submit'])) {
      $file = $_FILES['image']['name'];

      $query = "INSERT INTO `user`('image') VALUES('$file')";
      $res = mysqli_query($conn,$query);
      // header('location: list.php');

      if ($res) {
         move_uploaded_file($_FILES['image']['tmp_name'], "$file");
      }
   }

    $sql = "INSERT INTO `user`( `firstname`, `lastname`, `email`, `address`, `gender`, `image`)
     VALUES ('$firstname', '$lastname', '$email', '$address', '$gender', '$image')";
     $insert = mysqli_query($conn,$sql);
     header('location: list.php');

     if (!$insert) {
        //  echo '<script>alert("User registered successfully.");</script>';
        echo "Error data is not inserted";
     }else {
        echo "Your record is added ";
     }
}
?>