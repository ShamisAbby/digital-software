<?php
require_once("./element/links.php");
?>
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
          <div class="nav-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidenav"><a href="javascript:;"><i class="bi bi-list"></i></a></div>
            <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
            <div class="account-profile">
              <h6 class="mb-0 fw-bold text-dark">Profile</h6>
            </div>
            <form class="searchbar">
              <div class="position-absolute top-50 translate-middle-y search-icon start-0 ms-4"><i class="bi bi-search"></i></div>
              <input class="form-control px-5" type="text" placeholder="Search for anything">
              <div class="position-absolute top-50 translate-middle-y end-0 search-close-icon me-4"><i class="bi bi-x-lg"></i></div>
            </form>
            <ul class="navbar-nav ms-auto d-flex align-items-center top-right-menu">
              <li class="nav-item mobile-search-button">
                <a class="nav-link" href="javascript:;"><i class="bi bi-search"></i></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#"><i class="bi bi-heart"></i></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link position-relative" href="cart.php">
                <div class="cart-badge">8</div>
                <i class="bi bi-bag"></i>
              </a>
            </li> -->
            </ul>
        </nav>
       </header>
        <!--end to header-->

      <!--start to page content-->
       <div class="page-content">

        <div class="profile-img mb-3 border p-3 text-center rounded-3 bg-light">
           <img src="assets/images/avatars/user.png" width="90" height="90" class="rounded-circle" alt="">
           <h6 class="mb-0 fw-bold mt-3"><?php echo $user; ?></h6>
        </div>

       
      <div class="mb-3">
        <a class="profile-item" href="my-profile.php">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-person"></i></div>
                 <div class="flex-grow-1">My Profile</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>

       <div class="mb-3">
        <a class="profile-item" href="#">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-basket3"></i></div>
                 <div class="flex-grow-1">My Order</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>


       <div class="mb-3">
        <a class="profile-item" href="#">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-bell"></i></div>
                 <div class="flex-grow-1">Notification</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>


       <div class="mb-3">
        <a class="profile-item" href="./handler/logout.php">
         <div class="card rounded-3">
          <div class="card-body py-2">
              <div class="d-flex align-items-center gap-3 fs-6">
                 <div><i class="bi bi-box-arrow-right"></i></div>
                 <div class="flex-grow-1">Logout</div>
                 <div><i class="bi bi-chevron-right"></i></div>
              </div>
          </div>
         </div>
        </a>
       </div>

       </div>
     <!--end to page content-->


    <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center">
      <nav class="navbar navbar-expand p-0 flex-grow-1">
        <div class="navbar-nav align-items-center justify-content-between w-100">
          <a class="nav-link" href="home.php">
            <div class="d-flex flex-column align-items-center">
              <div class="icon"><i class="bi bi-house"></i></div>
              <div class="name">Home</div>
            </div>
          </a>
          <a class="nav-link" href="category-list.php">
            <div class="d-flex flex-column align-items-center">
              <div class="icon"><i class="bi bi-grid"></i></div>
              <div class="name">Category</div>
            </div>
          </a>
          <a class="nav-link" href="javascript:;">
            <div class="d-flex flex-column align-items-center">
              <div class="icon"><i class="bi bi-person-fill"></i></div>
              <div class="name">Profile</div>
            </div>
          </a>
          <a class="nav-link" href="contact-us.php">
            <div class="d-flex flex-column align-items-center">
              <div class="icon"><i class="bi bi-question-circle"></i></div>
              <div class="name">Contact</div>
            </div>
          </a>

        </div>
      </nav>
     </footer>
     <!--end to footer-->



      <!--start sidenav-->
      <?php
     require_once('./element/sideNav.php');
     ?>
    <!--end sidenav-->
     

    </div>
   <!--end wrapper-->


    <!--JS Files-->  
    <?php
require_once("./element/js-link.php")
?>
  </div>