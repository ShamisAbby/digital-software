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
            <div class="account-notification">
              <h6 class="mb-0 fw-bold text-dark">Notifications</h6>
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
    

        <div class="mb-3 border p-3 rounded-3">

          <div class="d-flex align-items-center flex-row flex-wrap flex-fill justify-content-between gap-3">
            <div class="icon-wrapper text-center">
              <div class="noti-box mb-1 mx-auto bg-primary">
                <i class="bi bi-tag"></i>
              </div>
              <p class="fw-bold mb-0 text-dark">Promo</p>
            </div>
            <div class="icon-wrapper text-center">
              <div class="noti-box mb-1 mx-auto bg-red">
                <i class="bi bi-basket2"></i>
              </div>
              <p class="fw-bold mb-0 text-dark">Order</p>
            </div>
            <div class="icon-wrapper text-center">
              <div class="noti-box mb-1 mx-auto bg-green">
                <i class="bi bi-truck"></i>
              </div>
              <p class="fw-bold mb-0 text-dark">Delivery</p>
            </div>
            <div class="icon-wrapper text-center">
              <div class="noti-box mb-1 mx-auto bg-purple">
                <i class="bi bi-person-circle"></i>
              </div>
              <p class="fw-bold mb-0 text-dark">Account</p>
            </div>
          </div>
        
        </div>


        <h6 class="fw-bold mb-3 py-2 rounded-3 px-3 bg-light text-dark">Today</h6>
        <div class="card rounded-3 mb-3">
          <div class="card-body">
            <div class="d-flex flex-row gap-3 align-items-start">
              <div class="noti-box mb-1 bg-warning">
                <i class="bi bi-truck"></i>
              </div>
              <div class="">
                <h6 class="text-dark fw-bold">Order Success</h6>
                <small>5 Min ago</small>
                <p class="mb-0 fw-bold">Your order #4785 has been dispatched</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card rounded-3 mb-3">
          <div class="card-body">
            <div class="d-flex flex-row gap-3 align-items-start justify-content-start">
              <div class="noti-box mb-1 bg-info">
                <i class="bi bi-truck"></i>
              </div>
              <div class="">
                <h6 class="text-dark fw-bold">45% Discount</h6>
                <small>10 Min ago</small>
                <p class="mb-0 fw-bold">There are discount offer</p>
              </div>
            </div>
          </div>
        </div>
        
        <h6 class="fw-bold mb-3 py-2 rounded-3 px-3 bg-light text-dark">Yesterday</h6>
        <div class="card rounded-3 mb-3">
          <div class="card-body">
            <div class="d-flex flex-row gap-3 align-items-start justify-content-start">
              <div class="noti-box mb-1 bg-success">
                <i class="bi bi-truck"></i>
              </div>
              <div class="">
                <h6 class="text-dark fw-bold">Order Delivered</h6>
                <small>Yesterday</small>
                <p class="mb-0 fw-bold">Your order successfully delivered</p> 
              </div>
            </div>
          </div>
        </div>

       </div>
     <!--end to page content-->

    <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center gap-3">
      <a href="authentication-log-in.php" class="btn btn-ecomm rounded-3 btn-dark flex-fill"><i class="bi bi-box-arrow-left me-2"></i>Logout</a>
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