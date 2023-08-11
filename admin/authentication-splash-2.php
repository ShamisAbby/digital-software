<?php
session_start();

if (!isset($_SESSION['role'])) {
  header('location: index.php');
}

?>
<!doctype html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Software Arena</title>

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/metismenu/metisMenu.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/plugins/metismenu/mm-vertical.css" />
    <link rel="stylesheet" type="text/css" href="../assets/plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="../assets/plugins/slick/slick-theme.css" />
    
    <!--CSS Files-->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/cdn.jsdelivr.net/npm/bootstrap-icons%401.8.3/font/bootstrap-icons.css">
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <link href="../assets/css/dark-theme.css" rel="stylesheet"/>

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/metismenu/metisMenu.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/plugins/metismenu/mm-vertical.css" />
  </head>
  <body class="splash-bg-2">
  <div class="risponsive">

    <!--page loader-->
    <div class="loader-wrapper">
      <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-white" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
   <!--end loader-->

   <!--start wrapper-->
    <div class="wrapper">


      <!--start to page content-->
       <div class="page-content">

        <div class="card rounded-0 bg-transparent position-absolute fixed-bottom m-3 border-0">
          <div class="card-body">
             <div class="text-center my-5">
               <h5 class="text-white fw-bold">Enjoy your shopping with us </h5>
               <p class="mb-0 text-white">Digital Software Arena we provide pure product from the biggest brand all of th world</p>
             </div>
             <div class="d-grid gap-3">
                <a href="index.php" class="btn btn-ecomm bg-white border-white rounded-3">Log In</a>   
                <a href="authentication-sign-up.php" class="btn btn-ecomm bg-transparent border-white text-white rounded-3">Sign Up</a>
             </div>
          </div>
        </div>


       </div>
     <!--end to page content-->

    </div>
   <!--end wrapper-->


    <!--JS Files-->  
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/cookies-theme-switcher.js"></script>
<script src="../assets/plugins/metismenu/metisMenu.min.js"></script>
<script src="../assets/plugins/slick/slick.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/loader.js"></script>
  </div>
</body>

</html>