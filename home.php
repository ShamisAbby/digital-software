<?php
require_once("./element/links.php");
?>

<body>

  <div class="risponsive">
    <!--<div class="col-lg-3 col-md-3 col-12"></div>
  <div class="col-lg-6 col-md-6 col-12"> -->


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
          <div class="brand-logo"><a href="javascript:;"><img src="assets/images/logo.png" width="95" alt=""></a></div>
          <form class="searchbar">
            <div class="position-absolute top-50 translate-middle-y search-icon start-0"><i class="bi bi-search"></i></div>
            <input class="form-control px-5" type="text" placeholder="Search for anything">
            <div class="position-absolute top-50 translate-middle-y end-0 search-close-icon"><i class="bi bi-x-lg"></i></div>
          </form>
          <ul class="navbar-nav ms-auto d-flex align-items-center top-right-menu">
            <li class="nav-item mobile-search-button">
              <a class="nav-link" href="javascript:;"><i class="bi bi-search"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="wishlist.php"><i class="bi bi-heart"></i></a>
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

        <!--start category-->
        <div class="category-container">
          <div class="category-wrapper">
            <div class="category">
              <div class="d-flex align-items-center gap-3">

                <?php
                $categ = $conn->prepare("SELECT * FROM `categories`");
                $categ->execute();
                $category = $categ->fetchAll();

                if ($categ->rowCount() == 0) {
                  echo '<div class="text-danger">There is no category yet!</div>';
                }
                foreach ($category as $row) {
                ?>
                  <!-- Category it self -->
                  <div class="category-img">
                    <figure>
                      <a href="shop.php?id=<?php echo $row['category_id']; ?>">
                        <img src="assets/images/category/<?php echo $row['category_img']; ?>" class="img-fluid" alt="">
                      </a>
                      <figcaption><?php echo $row['category_name']; ?></figcaption>
                    </figure>
                  </div>

                <?php
                }
                ?>

                <!-- Add more categories here -->
              </div>
            </div>
          </div>
        </div>
        <!--end category-->


        <!-- <div class="py-1"></div> -->

        <!--start banner slider-->
        <div class="banner-slider">
          <div class="banner-item">
            <a href="shop.php"><img src="assets/images/banner-sliders/01.jpg" class="img-fluid rounded-3" alt=""></a>
          </div>
          <div class="banner-item">
            <a href="shop.php"><img src="assets/images/banner-sliders/02.jpg" class="img-fluid rounded-3" alt=""></a>
          </div>
          <div class="banner-item">
            <a href="shop.php"><img src="assets/images/banner-sliders/03.jpg" class="img-fluid rounded-3" alt=""></a>
          </div>
          <div class="banner-item">
            <a href="shop.php"><img src="assets/images/banner-sliders/04.jpg" class="img-fluid rounded-3" alt=""></a>
          </div>
          <div class="banner-item">
            <a href="shop.php"><img src="assets/images/banner-sliders/05.jpg" class="img-fluid rounded-3" alt=""></a>
          </div>
          <div class="banner-item">
            <a href="shop.php"><img src="assets/images/banner-sliders/02.jpg" class="img-fluid rounded-3" alt=""></a>
          </div>
        </div>
        <!--end banner slider-->


        <div class="py-2"></div>

        <!--start features-->
        <div class="features-section">
          <div class="row row-cols-2 row-cols-md-4 g-3">
            <div class="col d-flex">
              <div class="card rounded-3 w-100">
                <div class="card-body">
                  <div class="icon-wrapper text-center">
                    <div class="noti-box mb-1 mx-auto bg-primary">
                      <i class="bi bi-truck"></i>
                    </div>
                    <p class="fw-bold mb-0 text-dark">Safe Products</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col d-flex">
              <div class="card rounded-3 w-100">
                <div class="card-body">
                  <div class="icon-wrapper text-center">
                    <div class="noti-box mb-1 mx-auto bg-green">
                      <i class="bi bi-headset"></i>
                    </div>
                    <p class="fw-bold mb-0 text-dark">24/7 Support</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col d-flex">
              <div class="card rounded-3 w-100">
                <div class="card-body">
                  <div class="icon-wrapper text-center">
                    <div class="noti-box mb-1 mx-auto bg-purple">
                      <i class="bi bi-credit-card"></i>
                    </div>
                    <p class="fw-bold mb-0 text-dark">Secure Payment</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col d-flex">
              <div class="card rounded-3 w-100">
                <div class="card-body">
                  <div class="icon-wrapper text-center">
                    <div class="noti-box mb-1 mx-auto bg-red">
                      <i class="bi bi-minecart-loaded"></i>
                    </div>
                    <p class="fw-bold mb-0 text-dark">Free Returns</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!--end features-->

          <div class="py-2"></div>


          <!--start Products-->
          <div class="offcanvas-body py-1">
            <h4 class="my-2 text-center fw-bold section-title">New Procucts</h4>

            <!--start produt grid-->
            <div class="product-grid">
              <div class="row row-cols-2 row-cols-md-3 g-0">

                <?php
                $product = $conn->prepare("SELECT * FROM `products` ORDER BY product_id DESC");
                $product->execute();

                if ($product->rowCount() == 0) {
                  echo '<div class="text-danger">There is no Product yet!</div>';
                }
                $products = $product->fetchAll();
                foreach ($products as $productRow) {
                ?>
                  <div class="col" style="border: 2px solid #f1f1f1;">
                    <div class="card rounded-0 border-0">
                      <div class="position-relative overflow-hidden">
                        <a href="javascript:;">
                          <img src="assets/images/product/<?php echo $productRow['product_img']; ?>" class="img-fluid rounded-0" alt="...">
                        </a>
                      </div>
                      <div class="card-body">
                        <div class="hstack align-items-center justify-content-between">
                          <h5 class="mb-0 fw-bold product-short-title"><?php echo $productRow['product_name']; ?></h5>
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

          <div class="py-2"></div>


          <!--start articles-->
          <div class="trending-category">
            <div class="row row-cols-2 row-cols-md-3 g-3">
              <?php
              $artic = $conn->prepare("SELECT * FROM articles ORDER BY article_id DESC;");
              $artic->execute();
              $articles = $artic->fetchAll();

              if ($artic->rowCount() == 0) {
                echo '<div class="text-danger">There is no Article yet!</div>';
              }
              foreach ($articles as $articRow) {
              ?>
                <!-- Article it self -->
                <div class="col d-flex">
                  <div class="card rounded-0 w-100 rounded-3 overflow-hidden">
                    <a href="./handler/open-article.php?file=<?php echo $articRow['article_path']; ?>"><img src="assets/images/articles_imgs/<?php echo $articRow['article_img']; ?>" class="img-fluid" alt=""></a>
                    <div class="card-body text-center">
                      <p class="mb-0 fw-bold"><a href="./handler/open-article.php?file=<?php echo $articRow['article_path']; ?>"><?php echo $articRow['title']; ?></a></p>
                    </div>
                  </div>
                </div>

              <?php
              }
              ?>

            </div>
            <div class="py-2"></div>
            <div class="text-center">
              <?php
              if ($artic->rowCount() != 0) {
                echo '<div class="text-success"><a href="article.php"> Read more Article!</a></div>';
              }

              ?>
            </div>




          </div>
          <!--end articles-->



          <div class="py-2"></div>

          <!--start brands slider-->
          <div class="sales-category-wrapper">
            <h4 class="my-2 text-center fw-bold section-title">Top Brands</h4>
            <div class="brands-slider">
              <div class="card rounded-3">
                <div class="card-body">
                  <a href="shop.php"><img src="assets/images/brands/01.webp" class="img-fluid" alt=""></a>
                </div>
              </div>
              <div class="card rounded-3">
                <div class="card-body">
                  <a href="shop.php"><img src="assets/images/brands/02.webp" class="img-fluid" alt=""></a>
                </div>
              </div>
              <!-- <div class="card rounded-3">
                <div class="card-body">
                  <a href="shop.php"><img src="assets/images/brands/03.webp" class="img-fluid" alt=""></a>
                </div>
              </div> -->
              <div class="card rounded-3">
                <div class="card-body">
                  <a href="shop.php"><img src="assets/images/brands/04.webp" class="img-fluid" alt=""></a>
                </div>
              </div>
              <div class="card rounded-3">
                <div class="card-body">
                  <a href="shop.php"><img src="assets/images/brands/05.webp" class="img-fluid" alt=""></a>
                </div>
              </div>
              <div class="card rounded-3">
                <div class="card-body">
                  <a href="shop.php"><img src="assets/images/brands/06.webp" class="img-fluid" alt=""></a>
                </div>
              </div>
              <div class="card rounded-3">
                <div class="card-body">
                  <a href="shop.php"><img src="assets/images/brands/07.webp" class="img-fluid" alt=""></a>
                </div>
              </div>
              <div class="card rounded-3">
                <div class="card-body">
                  <a href="shop.php"><img src="assets/images/brands/08.webp" class="img-fluid" alt=""></a>
                </div>
              </div>

            </div>
          </div>
          <!--end brands slider-->

          <div class="py-2"></div>

          <!--start reviews section-->
          <div class="reviews-section">
            <h4 class="my-2 text-center fw-bold section-title">Our Client Reviews</h4>

            <div class="review-slider">
              <div class="review-item p-3 border rounded-3 bg-light">
                <h6 class="client-name fw-bold">Shamis Aziz</h6>
                <div class="ratings mb-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <div class="review-text">
                  <p>
                    Amazing platform! The ease of listing and selling our software was incredible.
                    The platform's user-friendly interface made it simple to upload and showcase our products.
                    Within a short time, we saw a significant increase in sales and exposure.
                    Highly recommended for software sellers looking to reach a wider audience.
                  </p>
                  <p class="text-end mb-0 reviw-date">08/08/2023 at 22:20:1</p>
                </div>
              </div>
              <div class="review-item p-3 border rounded-3 bg-light">
                <h6 class="client-name fw-bold">Denis Joe</h6>
                <div class="ratings mb-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <div class="review-text">
                  <p>
                    A game-changer for our software business! This platform provided
                    us with the perfect marketplace to showcase our products to a targeted audience.
                    The streamlined checkout process and secure payment options instilled confidence
                    in our customers. We are thrilled with the support and tools the platform offers
                    to help us manage our sales efficiently. Our software sales have never been better!
                  </p>
                  <p class="text-end mb-0 reviw-date">10/03/2023 at 12:55:8</p>
                </div>
              </div>
              <div class="review-item p-3 border rounded-3 bg-light">
                <h6 class="client-name fw-bold">Sara Abdul</h6>
                <div class="ratings mb-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <div class="review-text">
                  <p>
                    Exceeded our expectations! From day one, the platform's team has been responsive and supportive.
                    They genuinely care about our success and went the extra mile to optimize our product listings.
                    Thanks to their marketing efforts, our software gained significant visibility,
                    and we saw a surge in sales. This platform is a game-changer for software sellers,
                    and we are delighted to be a part of it!
                  </p>
                  <p class="text-end mb-0 reviw-date">02/06/2022 at 14:20:18</p>
                </div>
              </div>
            </div>

          </div>
          <!--end reviews section-->

          <div class="py-2"></div>

          <!--start sales category section with slider-->
          <!-- <div class="sales-category-wrapper">
            <h4 class="my-2 text-center fw-bold section-title">Trending In Product</h4>
            <div class="sales-category-slider">
              <div class="card rounded-0 rounded-3 overflow-hidden">
                <a href="shop.php"><img src="assets/images/trending-shoes/01.webp" class="img-fluid" alt=""></a>
                <div class="card-body text-center">
                  <p class="mb-0 fw-bold">Women Heels</p>
                </div>
              </div>
              <div class="card rounded-0 rounded-3 overflow-hidden">
                <a href="shop.php"><img src="assets/images/trending-shoes/02.webp" class="img-fluid" alt=""></a>
                <div class="card-body text-center">
                  <p class="mb-0 fw-bold">Sports Shoes</p>
                </div>
              </div>
              <div class="card rounded-0 rounded-3 overflow-hidden">
                <a href="shop.php"><img src="assets/images/trending-shoes/03.webp" class="img-fluid" alt=""></a>
                <div class="card-body text-center">
                  <p class="mb-0 fw-bold">Leather Shoes</p>
                </div>
              </div>
              <div class="card rounded-0 rounded-3 overflow-hidden">
                <a href="shop.php"><img src="assets/images/trending-shoes/04.webp" class="img-fluid" alt=""></a>
                <div class="card-body text-center">
                  <p class="mb-0 fw-bold">Sneakes</p>
                </div>
              </div>

            </div>
          </div> -->
          <!--end sales section with slider-->


        </div>
        <!--end to page content-->


        <!--start to footer-->
        <footer class="page-footer fixed-bottom border-top d-flex align-items-center">
          <nav class="navbar navbar-expand p-0 flex-grow-1">
            <div class="navbar-nav align-items-center justify-content-between w-100">
              <a class="nav-link" href="home.php">
                <div class="d-flex flex-column align-items-center">
                  <div class="icon"><i class="bi bi-house-fill"></i></div>
                  <div class="name">Home</div>
                </div>
              </a>
              <a class="nav-link" href="category.php">
                <div class="d-flex flex-column align-items-center">
                  <div class="icon"><i class="bi bi-grid"></i></div>
                  <div class="name">Category</div>
                </div>
              </a>
              <?php
              if (isset($_SESSION['role']) && $role == "admin") {
              ?>
                <a class="nav-link" href="profile.php">
                  <div class="d-flex flex-column align-items-center">
                    <div class="icon"><i class="bi bi-person"></i></div>
                    <div class="name">Profile</div>
                  </div>
                </a>
              <?php
              } else {
              ?>
                <a class="nav-link" href="#">
                  <div class="d-flex flex-column align-items-center">
                    <div class="icon"><i class="bi bi-person"></i></div>
                    <div class="name">Profile</div>
                  </div>
                </a>
              <?php
              }
              ?>

              <a class="nav-link" href="contact-us.php">
                <div class="d-flex flex-column align-items-center">
                  <div class="icon"><i class="bi bi-phone"></i></div>
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

      <!-- </div>
  <div class="col-lg-3 col-md-3 col-12"></div>-->
    </div>
    <!--JS Files-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/cookies-theme-switcher.js"></script>
    <script src="assets/plugins/metismenu/metisMenu.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/loader.js"></script>

</body>

</html>