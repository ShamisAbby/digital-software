
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
            <div class="account-profile">
              <h6 class="mb-0 fw-bold text-dark">Log In</h6>
            </div>
        </nav>
       </header>
        <!--end to header-->

      <!--start to page content-->
       <div class="page-content">

         <div class="login-body">
            <h5 class="fw-bold">Welcome Back</h5>
            <p class="mb-0">Login to your account to continue your shopping</p>
            <form class="mt-4" id="loginForm" action="../handler/login.php" method="post">

              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" name="email" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Email</label>
              </div>

              <div class="input-group mb-3" id="show_hide_password">
                <div class="form-floating flex-grow-1">
                  <input type="password" class="form-control rounded-3 rounded-end-0 border-end-0" name="pass" id="floatingInputPassword" placeholder="Enter Password">
                  <label for="floatingInputPassword">Password</label>
                </div>
                <span class="input-group-text bg-transparent rounded-start-0 rounded-3"><i class="bi bi-eye-slash"></i></span>
              </div>

              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">Remember</label>
                </div>
                <div class=""><a href="authentication-otp-varification.php" class="forgot-link">Forgot Password?</a></div>
              </div>
              <div class="mb-0 d-grid">
                <button type="submit" name="submit" class="btn btn-dark btn-ecomm rounded-3">Log In</button>
              </div>
              <div class="separator my-4">
                <div class="line"></div>
                <p class="mb-0 fw-bold px-3">Or</p>
                <div class="line"></div>
              </div>
              <div class="social-login d-flex flex-row gap-2 justify-content-center">
                 <a href="javascript:;" class="bg-facebook">
                  <i class="bi bi-facebook"></i>
                 </a>
                 <a href="javascript:;" class="bg-pinterest">
                  <i class="bi bi-google"></i>
                </a>
                 <a href="javascript:;" class="bg-linkedin">
                  <i class="bi bi-linkedin"></i>
                 </a>
               </div>
            </form>
         </div>

       </div>
     <!--end to page content-->


     <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center">
      <p class="mb-0 rounded-0">Don't have an account? <a href="authentication-sign-up.php" class="text-danger">Sign Up</a></p>
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