<?php
require_once("./element/links.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $product = $conn->prepare("SELECT * FROM `products` WHERE category_id = $id ORDER BY product_id DESC");
  $product->execute();
} else {
  $product = $conn->prepare("SELECT * FROM `products` ORDER BY product_id DESC");
  $product->execute();
}
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
        <div class="category-name">
          <h6 class="mb-0 fw-bold text-dark">All Product</h6>
          <p class="mb-0 fw-bold"><?php echo $product->rowCount(); ?> Items</p>
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

      <div class="page-banner mb-1">
        <img src="assets/images/page-banner/06.jpg" class="img-fluid rounded-0" alt="...">
      </div>

      <!--start Products-->
      <div class="offcanvas-body">

        <!--start produt grid-->
        <div class="product-grid">
          <div class="row row-cols-2 row-cols-md-3 g-0">

            <?php


            if ($product->rowCount() == 0) {
              echo '<div class="text-danger">There is no Product yet!</div>';
            }
            $products = $product->fetchAll();
            foreach ($products as $productRow) {
            ?>
              <div class="col" style="border: 2px solid #f1f1f1;">
                <div class="card rounded-0 border-0">
                  <div class="position-relative overflow-hidden">
                    <a href="https://<?php echo $productRow['product_link']; ?>" target="_blank">
                      <img src="assets/images/product/<?php echo $productRow['product_img']; ?>" class="img-fluid rounded-0" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <div class="hstack align-items-center justify-content-between">
                      <a href="https://<?php echo $productRow['product_link']; ?>" target="_blank">
                        <h5 class="mb-0 fw-bold product-short-title"><?php echo $productRow['product_name']; ?></h5>
                      </a>
                      <div class="wishlist"><i class="bi bi-heart"></i></div>
                    </div>
                    <p class="mt-1 mb-0 product-short-name font-12 fw-bold"><?php echo $productRow['description']; ?></p>
                    <div class="product-price d-flex align-items-center gap-1 mt-2 font-12">
                      <div class="fw-bold text-dark"><?php echo $productRow['price']; ?></div>
                      <!-- <div class="fw-light text-muted text-decoration-line-through"></div>
                          <div class="fw-bold text-danger">(10% off)</div> -->
                    </div>
                  </div>
                </div>
              </div>

            <?php
            }
            ?>
          </div><!--end row-->
        </div>
        <!--end produt grid-->

      </div>
      <!--End Products-->

    </div>
    <!--end to page content-->

    <!--start sidenav-->
    <?php
    require_once('./element/sideNav.php');
    ?>
    <!--end sidenav-->


  </div>
 


  <!--JS Files-->
  <?php
  require_once("./element/js-link.php")
  ?>
</div>