<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
 
    <title>Registration</title>

    <link rel="stylesheet" href="style.css">

</head>
<body class="container-fluid">
<?php
include('navbar.php');

?>

<div class="container mt-5">
          
<form action="registrationFormUp.php" method="post">
    <div class="mb-3">
        <label class="form-label" for="email">Email address</label>
        <input type="email" name="email" id="email" class="form-control" />  
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="username" >
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" >
    </div>
    
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" id="phone" >
    </div>
        
    <div class="mb-3">
        <label for="pass" class="form-label">Password</label>
        <input type="password" name="pass" class="form-control" id="pass">
    </div>

    <button type="submit" class="btn btn-primary">Sign up</button>
    </form>



</div>

<br>
<br>

</body>
</html>