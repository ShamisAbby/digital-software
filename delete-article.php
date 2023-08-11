<?php
require_once("./element/links.php");

$artic = $conn->prepare("SELECT * FROM articles ORDER BY article_id DESC;");
$artic->execute();

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
                        <h6 class="mb-0 fw-bold text-dark">All Articles</h6>
                        <p class="mb-0 fw-bold"><?php echo $artic->rowCount(); ?> Items</p>
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

                <!--start articles-->
                <div class="trending-category">
                    <div class="row row-cols-2 row-cols-md-3 g-0">
                        <?php

                        $articles = $artic->fetchAll();

                        if ($artic->rowCount() == 0) {
                            echo '<div class="text-danger">There is no Article yet!</div>';
                        }
                        foreach ($articles as $articRow) {
                        ?>
                            <!-- Article it self -->
                            <div class="col d-flex m-1">
                                <div class="card rounded-0 w-100 rounded-3 overflow-hidden">
                                    <a href="./handler/open-article.php?file=<?php echo $articRow['article_path']; ?>"><img src="assets/images/articles_imgs/<?php echo $articRow['article_img']; ?>" class="img-fluid" alt=""></a>
                                    <div class="similar-products position-absolute top-0 end-0 me-3 mt-3">
                                        <a href="./handler/delete-product.php?id=<?php echo $articRow['article_id']; ?>" onclick="return confirm('Are sure you want to delete <?php echo $articRow['article_id']; ?> ?')"><i class="bi bi-x-lg text-bg-danger p-1 shadow rounded-5"></i></a>
                                    </div>
                                    <div class="card-body text-center">
                                        <p class="mb-0 fw-bold"><a style="color: #2c2c2c;" href="./handler/open-article.php?file=<?php echo $articRow['article_path']; ?>"><?php echo $articRow['title']; ?></a></p>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>

                    </div>


                </div>
                <!--end articles-->

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