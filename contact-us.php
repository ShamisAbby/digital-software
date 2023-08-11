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
          <div class="contact-us">
            <h6 class="mb-0 fw-bold text-dark">Contact Us</h6>
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

        <div class="card rounded-3 mb-3">
          <div class="card-body">
            <form>
              <div class="form-body">
                <h5 class="mb-0 fw-bold">Drop Us a Line</h5>
                <div class="my-3 border-bottom"></div>
                <div class="mb-3">
                  <label class="form-label">Enter Name</label>
                  <input type="text" class="form-control rounded-3">
                </div>
                <div class="mb-3">
                  <label class="form-label">Enter Email</label>
                  <input type="text" class="form-control rounded-3">
                </div>
                <div class="mb-3">
                  <label class="form-label">Phone Number</label>
                  <input type="text" class="form-control rounded-3">
                </div>
                <div class="mb-3">
                  <label class="form-label">Message</label>
                  <textarea class="form-control rounded-3" rows="4" cols="4"></textarea>
                </div>
              </div>
              <!--start to footer-->
              <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center gap-3">
                <button type="submit" name="submit" class="btn btn-ecomm rounded-3 btn-dark flex-fill"><i class="bi bi-send me-2"></i>Send Message</button>
              </footer>
              <!--end to footer-->
            </form>
          </div>
        </div>


        <div class="card rounded-3">
          <div class="card-body">
            <div class="address mb-3">
              <h5 class="mb-0 fw-bold">Address</h5>
              <p class="mb-0 font-12">Stone-town, Zanzibar, Tanzania</p>
            </div>
            <hr>
            <div class="phone mb-3">
              <h5 class="mb-0 fw-bold">Phone</h5>
              <p class="mb-0 font-13">Mobile (+255) 772-800-257</p>
              <p class="mb-0 font-13">Mobile (+255) 772-800-257</p>
            </div>
            <hr>
            <div class="email mb-3">
              <h5 class="mb-0 fw-bold">Email</h5>
              <p class="mb-0 font-13">digitalsoftware@gmail.com</p>
            </div>
            <hr>
            <div class="working-days mb-0">
              <h5 class="mb-0 fw-bold">Working Days</h5>
              <p class="mb-0 font-13">Mon - FRI / 24/7</p>
            </div>
          </div>
        </div>

      </div>
      <!--end to page content-->




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