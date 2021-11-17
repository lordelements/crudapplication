<?php 
 include_once ("private/db_connection.php");
 error_reporting(0);
 session_start();

 if (isset($_SESSION['username'])) {
  header("Location: list.php");
}

 if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM `login_register` WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn,$sql);
  if (!$result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: list.php");
  }else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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
                <header>LOGIN</header>
              </div>
                  <form action="" method="post">
                    <div class="input-group">
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"  required>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" name="password"  value="<?php echo $_POST['password']; ?>" required>
                    </div>

                    <div class="input-button">
                      <button name="submit"="submit">Login</button>
                    </div>
                    <p class="Login-register-text">Have an account? <a href="rigester.php">Register Here</a></p>
                    <p class="Forgot-password">Forgot-password !<a href="#">&nbsp;&nbsp;click here</a></p>
                  </form>
            </center>
  </div>
</body>
</html>