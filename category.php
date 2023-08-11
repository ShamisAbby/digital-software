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
        <div class="shop-category">
          <h6 class="mb-0 fw-bold text-dark">Category</h6>
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

      <div class="row row-cols-2 g-3">

        <?php
        $categ = $conn->prepare("SELECT * FROM `categories`");
        $categ->execute();
        $category = $categ->fetchAll();

        if ($categ->rowCount() == 0) {
          echo '<div class="text-danger">There is no category yet!</div>';
        }
        foreach ($category as $row) {
        ?>

          <div class="col">
            <a href="shop.php?id=<?php echo $row['category_id']; ?>">
              <div class="card rounded-3 mb-0">
                <div class="card-body">
                   <div class="d-flex flex-column flex-column-reverse align-items-center justify-content-between gap-2">
                      <div class="category-name">
                        <h6 class="mb-0 fw-bold text-dark"><?php echo $row['category_name']; ?></h6>
                      </div>
                      <div class="category-img">
                      <img src="assets/images/category/<?php echo $row['category_img']; ?>" class="img-fluid" width="100" alt="" />
                       </div>
                   </div>
                </div>
              </div>
            </a>
          </div>


        <?php
        }
        ?>

      </div><!--end row-->

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