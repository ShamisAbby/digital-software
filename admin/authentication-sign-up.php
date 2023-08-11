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
            <div class="account-sign-up">
              <h6 class="mb-0 fw-bold text-dark">Sign Up</h6>
            </div>
        </nav>
       </header>
        <!--end to header-->

      <!--start to page content-->
       <div class="page-content">

         <div class="login-body">
            <h5 class="fw-bold">Add Administrator</h5>
            <p class="mb-0">Create an account for another admin user</p>
            <form class="mt-4" method="post" action="./handler/newUser.php" onsubmit="return userFormValidation()">

              <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" name="name" id="floatingInputName" placeholder="Enter Name">
                <label for="floatingInputName">Name</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" name="email" id="floatingInputEmail" placeholder="name@example.com">
                <label for="floatingInputEmail">Email</label>
              </div>

              
              <div class="form-floating mb-3">
                <input type="tel" class="form-control rounded-3" name="phone" id="floatingInputPhone" placeholder="+255 773-223-212">
                <label for="floatingInputPhone">Phone</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" name="location" id="floatingInputLocation" placeholder="Ex: stone town">
                <label for="floatingInputLocation">Location</label>
              </div>

              <div class="input-group mb-3" id="show_hide_password1">
                <div class="form-floating flex-grow-1">
                  <input type="password" class="form-control rounded-3 border-end-0 rounded-end-0" name="password" id="floatingInputPassword1" placeholder="Enter Password">
                  <label for="floatingInputPassword1">New Password</label>
                </div>
                <span class="input-group-text bg-transparent rounded-3 rounded-start-0"><i class="bi bi-eye-slash"></i></span>
              </div>
              <div class="input-group mb-3" id="show_hide_password2">
                <div class="form-floating flex-grow-1">
                  <input type="password" class="form-control rounded-3 rounded-end-0 border-end-0" id="floatingInputPassword2" placeholder="Enter Password">
                  <label for="floatingInputPassword2">Confirm Password</label>
                </div>
                <span class="input-group-text bg-transparent rounded-3 rounded-start-0"><i class="bi bi-eye-slash"></i></span>
              </div>

              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree to Terms and Conditions
                  </label>
                </div>
              </div>

              <div class="mb-0 d-grid">
                <button type="submit" name="submit" class="btn btn-dark btn-ecomm rounded-3">Sign Up</button>
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
      <p class="mb-0 rounded-0">Already have an account? <a href="index.php" class="text-danger">Log In</a></p>
    </footer>
    <!--end to footer-->

    </div>
   <!--end wrapper-->


    <!--JS Files-->  

    
    <script>
        function userFormValidation() {
            const name = document.getElementById('floatingInputName').value;
            const email = document.getElementById('floatingInputEmail').value;
            const phone = document.getElementById('floatingInputPhone').value;
            const location = document.getElementById('floatingInputLocation').value;
            const password1 = document.getElementById('floatingInputPassword1').value;
            const password2 = document.getElementById('floatingInputPassword2').value;
            const agreeCheckbox = document.getElementById('flexCheckDefault').checked;

            // Check if any of the fields are empty
            if (name === '' || email === '' || phone === '' || location === '' || password1 === '' || password2 === '' || !agreeCheckbox) {
                alert('Please fill in all fields and agree to the Terms and Conditions.');
                return false; // Stop form submission if any field is empty or the checkbox is not checked
            }

            // Check if the passwords match
            if (password1 !== password2) {
                alert('Passwords do not match.');
                return false; // Stop form submission if passwords don't match
            }

            
            // Check email format
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Invalid email address.');
                return false; // Stop form submission if email format is invalid
            }

            // Check phone format
            const phoneRegex = /^\+?(\d[\d-. ]+)?(\([\d-. ]+\))?[\d-. ]+\d$/;
            if (!phoneRegex.test(phone)) {
                alert('Invalid phone number.');
                return false; // Stop form submission if phone format is invalid
            }

            // If all validations pass, allow form submission
            return true;
        }

      
    </script>
      <?php
        if(isset($_GET['error']) && $_GET['error'] == 2){
          echo "<script>alert('Ooops! Email address is alredy exist')</script>";
        }
        ?>
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