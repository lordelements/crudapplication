<?php 
  include_once ("private/db_connection.php");
  if (isset($_GET['deleteid'])) {
      $id=$_GET['deleteid'];

      $sql = "DELETE FROM `user` WHERE id= $id";
      $result = mysqli_query($conn,$sql);
      if ($result) {
          // echo "Deleted successfully";
          header('location: list.php');

      }else{
        die('Connection Failed : '.$conn->connect_error);
        // echo "<script>alert('Data is not deleted.')</script>";
       
      }
  }
?>