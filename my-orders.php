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
            <div class="account-my-orders">
              <h6 class="mb-0 fw-bold text-dark">My Orders</h6>
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
       <div class="page-content p-0">


        <ul class="list-group list-group-flush rounded-0">
          <li class="list-group-item py-3">
            <form>
              <div class="position-relative">
                <input type="text" class="form-control ps-5 rounded-3" placeholder="Search Product...">
                <span class="position-absolute top-50 product-show translate-middle-y"><i class="bi bi-search ms-3"></i></span>
             </div>
             </form>
          </li>
          <li class="list-group-item py-3">
            <div class="d-flex flex-row align-items-start align-items-stretch gap-3">
              <div class="product-img">
                 <img src="assets/images/similar/01.webp" class="rounded-3" width="100" alt="">
              </div>
              <div class="product-info flex-grow-1">
                 <h6 class="fw-bold mb-1 text-dark">Checked Straight Kurta</h6>
                 <p class="mb-0"> Women Pink & White Printed</p>
                <div class="mt-3 hstack gap-2">
                  <button type="button" class="btn btn-sm border rounded-3">Size : XXL</button>
                  <button type="button" class="btn btn-sm border rounded-3">Qty : 2</button>
               </div>
              </div>
             </div>
             <div class="d-flex align-items-center gap-3 justify-content-between mt-2">
              <p class="mb-1 fw-bold">Rate this Product</p>
              <div class="vr"></div>
              <div class="ratings">
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star h6"></i>
                <i class="bi bi-star h6"></i>
              </div>
            </div>
          </li>
          <li class="list-group-item py-3">
            <div class="d-flex flex-row align-items-start align-items-stretch gap-3">
              <div class="product-img">
                 <img src="assets/images/similar/02.webp" class="rounded-3" width="100" alt="">
              </div>
              <div class="product-info flex-grow-1">
                 <h6 class="fw-bold mb-1 text-dark">Checked Straight Kurta</h6>
                 <p class="mb-0"> Women Pink & White Printed</p>
                <div class="mt-3 hstack gap-2">
                  <button type="button" class="btn btn-sm border rounded-3">Size : XXL</button>
                  <button type="button" class="btn btn-sm border rounded-3">Qty : 2</button>
               </div>
              </div>
             </div>
             <div class="d-flex align-items-center gap-3 justify-content-between mt-2">
              <p class="mb-1 fw-bold">Rate this Product</p>
              <div class="vr"></div>
              <div class="ratings">
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star h6"></i>
                <i class="bi bi-star h6"></i>
              </div>
            </div>
          </li>
          <li class="list-group-item py-3">
            <div class="d-flex flex-row align-items-start align-items-stretch gap-3">
              <div class="product-img">
                 <img src="assets/images/similar/03.webp" class="rounded-3" width="100" alt="">
              </div>
              <div class="product-info flex-grow-1">
                 <h6 class="fw-bold mb-1 text-dark">Checked Straight Kurta</h6>
                 <p class="mb-0"> Women Pink & White Printed</p>
                <div class="mt-3 hstack gap-2">
                  <button type="button" class="btn btn-sm border rounded-3">Size : XXL</button>
                  <button type="button" class="btn btn-sm border rounded-3">Qty : 2</button>
               </div>
              </div>
             </div>
             <div class="d-flex align-items-center gap-3 justify-content-between mt-2">
              <p class="mb-1 fw-bold">Rate this Product</p>
              <div class="vr"></div>
              <div class="ratings">
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star h6"></i>
                <i class="bi bi-star h6"></i>
              </div>
            </div>
          </li>
          <li class="list-group-item py-3">
            <div class="d-flex flex-row align-items-start align-items-stretch gap-3">
              <div class="product-img">
                 <img src="assets/images/similar/04.webp" class="rounded-3" width="100" alt="">
              </div>
              <div class="product-info flex-grow-1">
                 <h6 class="fw-bold mb-1 text-dark">Checked Straight Kurta</h6>
                 <p class="mb-0"> Women Pink & White Printed</p>
                <div class="mt-3 hstack gap-2">
                  <button type="button" class="btn btn-sm border rounded-3">Size : XXL</button>
                  <button type="button" class="btn btn-sm border rounded-3">Qty : 2</button>
               </div>
              </div>
             </div>
             <div class="d-flex align-items-center gap-3 justify-content-between mt-2">
              <p class="mb-1 fw-bold">Rate this Product</p>
              <div class="vr"></div>
              <div class="ratings">
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star h6"></i>
                <i class="bi bi-star h6"></i>
              </div>
            </div>
          </li>
          <li class="list-group-item py-3">
            <div class="d-flex flex-row align-items-start align-items-stretch gap-3">
              <div class="product-img">
                 <img src="assets/images/similar/05.webp" class="rounded-3" width="100" alt="">
              </div>
              <div class="product-info flex-grow-1">
                 <h6 class="fw-bold mb-1 text-dark">Checked Straight Kurta</h6>
                 <p class="mb-0"> Women Pink & White Printed</p>
                <div class="mt-3 hstack gap-2">
                  <button type="button" class="btn btn-sm border rounded-3">Size : XXL</button>
                  <button type="button" class="btn btn-sm border rounded-3">Qty : 2</button>
               </div>
              </div>
             </div>
             <div class="d-flex align-items-center gap-3 justify-content-between mt-2">
              <p class="mb-1 fw-bold">Rate this Product</p>
              <div class="vr"></div>
              <div class="ratings">
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star-fill text-warning h6"></i>
                <i class="bi bi-star h6"></i>
                <i class="bi bi-star h6"></i>
              </div>
            </div>
          </li>
        </ul>

       </div>
     <!--end to page content-->


<!--start order filter offcanvas-->   
<div class="offcanvas offcanvas-bottom h-100 border-top-0" tabindex="-1" id="OrderFilterCanvas">
  <div class="offcanvas-header border-bottom">
    <h6 class="offcanvas-title mb-0 fw-bold text-uppercase text-dark">Order Filters</h6>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
   <div class="mb-3">
    <h6 class="mb-3 fw-bold">Status</h6>
    <ul class="list-group rounded-3">
      <li class="list-group-item">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
          <label class="form-check-label" for="flexRadioDefault1">
            All 
          </label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            On the way
          </label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
          <label class="form-check-label" for="flexRadioDefault3">
            Delivered
          </label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
          <label class="form-check-label" for="flexRadioDefault4">
            Cancelled
          </label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
          <label class="form-check-label" for="flexRadioDefault5">
            Returned
          </label>
        </div>
      </li>
    </ul>
   </div>

   <div class="mb-3"> 
    <h6 class="mb-3 fw-bold">Time</h6>
    <ul class="list-group rounded-3">
      <li class="list-group-item">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault6" checked="">
          <label class="form-check-label" for="flexRadioDefault6">
            Anytime 
          </label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault7">
          <label class="form-check-label" for="flexRadioDefault7">
            Last 30 days
          </label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault8">
          <label class="form-check-label" for="flexRadioDefault8">
            Last 6 months
          </label>
        </div>
      </li>
      <li class="list-group-item">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioTime" id="flexRadioDefault9">
          <label class="form-check-label" for="flexRadioDefault9">
            Last year
          </label>
        </div>
      </li>
     </ul>
    </div>

  </div>
  <div class="offcanvas-footer border-top">
    <div class="hstack align-items-center justify-content-center gap-3 w-100">
      <div class="short-by p-3">
          <a href="javascript:;" class="btn btn-ecomm p-0"><i class="bi bi-x-lg me-3"></i>Clear</a>
      </div>
      <div class="vr"></div>
      <div class="filter-btn p-3">
        <a href="javascript:;" class="btn btn-ecomm p-0"><i class="bi bi-check-lg me-3"></i>Apply</a>
      </div>
  </div>
  </div>
</div>
<!--end order filter offcanvas-->


    <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center gap-3">
      <a href="#OrderFilterCanvas" data-bs-toggle="offcanvas" class="btn btn-ecomm btn-dark rounded-3 flex-fill">Filter</a>
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