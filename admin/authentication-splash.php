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
  <body>
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

        <div class="card rounded-0 border-0">
          <div class="card-body p-0">
             <div class="text-center">
              <img class="img-fluid" src="assets/images/splash-screen-1.webp" alt=""/> 
             </div>

             <div class="text-center my-5">
               <h5 class="text-dark fw-bold">We Promis Productivity</h5>
               <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
             </div>
             <div class="d-grid">
                <a href="authentication-splash-2.php" class="btn btn-dark btn-ecomm rounded-3">Get Started</a>   
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