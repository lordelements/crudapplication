
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
   
    <div class="container">
        <header>
            <h1>Input record</h1>
        </header>

    <form action="insert.php" method="post">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="Enter Firstname"
             autocomplete="off" required><br><br>
        </div>
        <div class="form-group">
           <label>Last Name</label>
           <input type="text" name="lastname" placeholder="Enter Lastname"
            autocomplete="off" required><br><br>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter Email"
             autocomplete="off" required><br><br>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" placeholder="Enter Address"
             autocomplete="off"required><br><br>
        <div>
      </div>
        <div class="form-group">
             <label>Gender</label>
            <select name="gender" id=""autocomplete="off" required>
               <option value="male">Male</option>
               <option value="female">Female</option>
               <option value="others">Others</option>
            </select>
        </div><br><br>
        <!-- UPLOAD IMAGE -->
        <div class="image">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control" required><br><br>
        </div>
      </div><br><br>
     
    <button type="submit"name="submit">Submit</button> 
</form>
</div>
</body>
</html>