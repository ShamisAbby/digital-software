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

      <!--start to header-->
      <header class="top-header fixed-top border-bottom d-flex align-items-center">
        <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
            <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
            <div class="account-verification">
              <h6 class="mb-0 fw-bold text-dark">Verification</h6>
            </div>
        </nav>
       </header>
        <!--end to header-->

      <!--start to page content-->
       <div class="page-content">

         <div class="login-body">
            <h5 class="fw-bold">Verify Code</h5>
            <p class="mb-0">Kindly Enter the 4 digits verification code</p>
            <div class="pt-5">
              <form class="mt-5">
                <div class="verification-controls d-flex align-items-center justify-content-center gap-3 mb-5">
                  <div class="">
                    <input type="text" class="form-control form-control-lg rounded-3" placeholder="0" maxlength="1">
                  </div>
                  <div class="">
                    <input type="text" class="form-control form-control-lg rounded-3" placeholder="0" maxlength="1">
                  </div>
                  <div class="">
                    <input type="text" class="form-control form-control-lg rounded-3" placeholder="0" maxlength="1">
                  </div>
                  <div class="">
                    <input type="text" class="form-control form-control-lg rounded-3" placeholder="0" maxlength="1">
                  </div>
                </div>
                <div class="mb-0 d-grid">
                  <!-- <input type="submit" class="btn btn-dark btn-ecomm rounded-3" value ="Verify"/> -->
                  <a href="authentication-change-password.php" class="btn btn-dark btn-ecomm rounded-3">Verify</a>
                </div>
              </form>
            </div>
         </div>

       </div>
     <!--end to page content-->


     <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center">
      <p class="mb-0 rounded-0">have't recived the code? <a href="javascript:;" class="text-danger">Resend</a></p>
    </footer>
    <!--end to footer-->
    

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