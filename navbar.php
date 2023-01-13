 <?php

 session_start();
 
 
 if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $islogged = 1;
}
else {
    $islogged = 0;
}




?>
 
 
 <div class="container-fliud p-4 rounded-3" style="font-size: large;">
        <nav class="navbar rounded-3 px-4 navbar-expand-lg navbar-light" style="background-color: azure;" >
            <div class="">
                <a class="navbar-brand" href="index.php">
                    <img class="rounded-circle" style="height: auto; width: 80px;"  src="cuppp.png" alt="logo"  class="img-responsive ">
                </a>
                <span>Fariha's Bakery</span>

            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
           
              <ul class="navbar-nav">
              <?php 
                if ($islogged == 1 && $username == 'admin') {
                  ?>
                <li class="nav-item mx-2">
                  <a class="nav-link"  href="index.php">Home</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="manageingradients.php">Manage Ingredients</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="managefood.php">Manage Food</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="foodshowcase2.php">Food Showcase</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="ordershow.php">Orders</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="report.php">Report</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" href="logout.php">Log Out</a>
                </li>
                <?php
                }
                else if ($islogged == 1 ) {
                ?>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="foodshowcase2.php">Food Showcase</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="logout.php">Log Out</a>
                </li>
                <?php
                    }
                    else {
                    ?>
               <li class="nav-item">
                  <a class="nav-link mx-2" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-2" href="login.php">Log In</a>
                </li>

                <?php
                    }
                  ?>


              </ul>
              
            </div>
          </nav>
          
    </div>
 