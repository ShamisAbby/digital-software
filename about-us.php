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
            <div class="about-us">
              <h6 class="mb-0 fw-bold text-dark">About Us</h6>
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

        <div class="row">
          <div class="col-12 col-xl-6">
            <h5 class="fw-bold">Our Story</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.</p>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College.</p>
          </div>
          <div class="col-12 col-xl-6">
             <img src="../../../../img.freepik.com/free-photo/this-is-same-shoes_329181-17697ecb.jpg?w=1060&amp;t=st=1656662767~exp=1656663367~hmac=a7a8676e06934f9254d893691c8315015867efc966e50ca7ad99c70f4a9c1e55" class="img-fluid rounded-3" alt="">     
          </div>
       </div>

       <div class="separator py-3">
        <div class="line"></div>
        <h5 class="mb-0 h5 fw-bold px-3">Why Choose Us</h5>
        <div class="line"></div>
      </div>

      <div class="row row-cols-1 row-cols-xl-3 g-3 why-choose">
        <div class="col d-flex">
          <div class="card rounded-0 shadow-none w-100 rounded-3">
            <div class="card-body">
              <img src="assets/images/icons/delivery.webp" width="50" alt="">
              <h5 class="my-3 fw-bold">Free Shipping</h5>
              <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industr in some form.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex">
          <div class="card rounded-0 shadow-none w-100 rounded-3">
            <div class="card-body">
              <img src="assets/images/icons/money-bag.webp" width="50" alt="">
              <h5 class="my-3 fw-bold">100% Back Gaurantee</h5>
              <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industr in some form.</p>
            </div>
          </div>
        </div>
        <div class="col d-flex">
          <div class="card rounded-0 shadow-none w-100 rounded-3">
            <div class="card-body">
              <img src="assets/images/icons/support.webp" width="50" alt="">
              <h5 class="my-3 fw-bold">Online Support 24/7</h5>
              <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industr in some form.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="separator py-3">
        <div class="line"></div>
        <h5 class="mb-0 h5 fw-bold px-3">Our Brands</h5>
        <div class="line"></div>
      </div>

      <div class="brands">
        <div class="row row-cols-2 row-cols-lg-5 g-3">
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/01.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/02.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/03.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/04.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/05.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/06.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/07.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/08.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/09.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3 border rounded-3 brand-box">
              <div class="d-flex align-items-center">
                <a href="javascript:;">
                  <img src="assets/images/brands/10.webp" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
         

       </div>
     <!--end to page content-->


      <!--start to footer-->
      <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center gap-3">
        <a href="shop.php" class="btn btn-ecomm rounded-3 btn-dark flex-fill"><i class="bi bi-basket2 me-2"></i>Shop Now</a>
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