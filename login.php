<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
 
    <title>Log In</title>

    <link rel="stylesheet" href="style.css">
 

</head>
<body class="container-fluid">

<?php
include('navbar.php');

?>


<div class="container mt-5">
          
<form action="auth.php" method="post"> 
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name = "username" class="form-control" id="username" >
    </div>
    <div class="mb-3">
        <label for="pass" class="form-label">Password</label>
        <input type="password" name="pass" class="form-control" id="pass">
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

    <div>
    Not a member? <span style="color:blue"> <a style="color:blue" href="registration.php">Registration</a> </span> 
    </div>

</div>

<br>
<br>
<br>


    
</body>
</html>