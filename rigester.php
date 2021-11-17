<?php 
 include_once ("private/db_connection.php");
  error_reporting(0);
  session_start();
  if (isset($_SESSION['username'])) {
    header("Location: list.php");
  }

 if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password === $cpassword) {
       $sql = "SELECT * FROM `login_register` WHERE email='$email'";
       $result = mysqli_query($conn,$sql);
        if (!$result->num_rows > 0) {
           $sql = "INSERT INTO `login_register`(`username`, `email`, `password`) 
            VALUES (' $username','$email',' $password')";
        $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('User Registration Successfully Completed.')</script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
    }else{
        echo "<script>alert('Woops! Something went wrong.')</script>";
    }
}else {
            echo "<script>alert('Oops! Looks Like Your Email Is Already Exists.')</script>";
        }

    } else {
        echo "<script>alert('Password Not Matched')</script>";
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
    <link rel="stylesheet" href="css/login_rigester.css">
</head>
<body>
 
      <div class="login-box">
            <center>
                <div class="tittle">
                    <header>SIGN-UP</header>
                </div>
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                        </div>
                        <div class="input-group">
                            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>"  required>
                        </div>
                        
                        <div class="input-button">
                           <button type="submit" name="submit">Register</button>
                        </div>
                        <p class="Login-register-text">Have an account? <a href="login.php">Login Here.</a></p>
                    </form>
            </center>
  </div>
</body>
</html>