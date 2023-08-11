<div class="sidenav">
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidenav">
    <div class="offcanvas-header bg-dark border-bottom border-light">
      <div class="hstack gap-3">
        <div class="">
          <img src="assets/images/avatars/user.png" width="45" class="rounded-3 p-1 bg-white" alt="" />
        </div>
        <div class="details">
          <h6 class="mb-0 text-white">Hi!
            <?php
            if (isset($_SESSION['role']) && $role == "admin") {
              echo $user;
            } else {
              echo "Welcome";
            }
            ?>
          </h6>
        </div>
      </div>
      <div data-bs-dismiss="offcanvas"><i class="bi bi-x-lg fs-5 text-white"></i></div>
    </div>
    <div class="offcanvas-body p-0">
      <nav class="sidebar-nav">
        <ul class="metismenu" id="sidenav">
          <li>
            <a href="home.php">
              <i class="bi bi-house-door me-2"></i>
              Home
            </a>
          </li>
          <?php
          if (isset($_SESSION['role']) && $role == "admin") {
          ?>
            <li>
              <a href="profile.php">
                <i class="bi bi-person-circle me-2"></i>
                Account
              </a>
            </li>
          <?php
          }
          ?>




          <li>
            <a class="has-arrow" href="javascript:;">
              <i class="bi bi-basket3 me-2"></i>
              Shop Pages
            </a>
            <ul>
              <li><a href="shop.php">Products</a></li>
              <li><a href="article.php">Article</a></li>
              <li><a href="category.php">Category</a></li>
              <li><a href="#">Wishlist</a></li>
            </ul>
          </li>

          <?php
          if (isset($_SESSION['role']) && $role == "admin") {
          ?>
            <li>
              <a class="has-arrow" href="javascript:;">
                <i class="bi bi-gear me-2"></i>
                Operations
              </a>
              <ul>
                <li><a href="add-article.php">Add Article</a></li>
                <li><a href="add-product.php">Add Product</a></li>
                <li><a href="add-category.php">Add Category</a></li>
                <li><a href="admin/authentication-sign-up.php">Add User</a></li>
                <!-- <li><a href="notification.php">Notification</a></li> -->
              </ul>
            </li>

            <li>
            <a class="has-arrow" href="javascript:;">
              <i class="bi bi-trash me-2"></i>
              Deletion
            </a>
            <ul>
              <li><a href="delete-product.php">Products</a></li>
              <li><a href="delete-article.php">Articles</a></li>
              <li><a href="delete-category.php">Categorys</a></li>
            </ul>
          </li>
          <?php
          }
          ?>

          <!-- <li>
                <a class="has-arrow" href="javascript:;">
                   <i class="bi bi-credit-card me-2"></i>
                   Payment
                 </a>
                <ul>
                  <li><a href="payment-method.php">Payment Method</a></li>
                  <li><a href="payment-error.php">Payment Error</a></li>
                  <li><a href="payment-completed.php">Payment Completed</a></li>
                </ul>
              </li> -->
          <!-- <li>
                <a class="has-arrow" href="javascript:;">
                   <i class="bi bi-grid me-2"></i>
                   Category
                 </a>
                <ul>
                  <li><a href="category-grid.php">Category Grid</a></li>
                  <li><a href="category-list.php">Category List</a></li>
                </ul>
              </li>
              <li> -->
          <!-- <a class="has-arrow" href="javascript:;">
                   <i class="bi bi-lock me-2"></i>
                   Authentication
                 </a>
                <ul>
                  <li><a href="authentication-log-in.php">Log In</a></li>
                  <li><a href="authentication-sign-up.php">Sign Up</a></li>
                  <li><a href="authentication-otp-varification.php">Verification</a></li>
                  <li><a href="authentication-change-password.php">Change Password</a></li>
                  <li><a href="authentication-splash.php">Splash</a></li>
                  <li><a href="authentication-splash-2.php">Splash 2</a></li>
                </ul>
              </li> -->
          <!-- <li>
                <a class="has-arrow" href="javascript:;">
                   <i class="bi bi-star me-2"></i>
                   Customer Reviews
                 </a>
                <ul>
                  <li><a href="reviews-and-ratings.php">Ratings & Reviews</a></li>
                  <li><a href="write-a-review.php">Write a Review</a></li>
                </ul>
              </li>
              <li> -->
          <a href="about-us.php">
            <i class="bi bi-emoji-smile me-2"></i>
            About Us
          </a>
          </li>
          <li>
            <a href="contact-us.php">
              <i class="bi bi-headphones me-2"></i>
              Contact Us
            </a>
          </li>


          <?php
          if (isset($_SESSION['role']) && $role == "admin") {
          ?>
            <li>
              <a href="./handler/logout.php" onclick="return confirm('Click OK if realy need to logout')">
                <i class="bi bi-box-arrow-right mx-1"></i>
                Logout
              </a>
            </li>
          <?php
          }
          ?>

        </ul>
      </nav>
    </div>
    <div class="offcanvas-footer border-top p-3">
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="DarkMode" onchange="toggleTheme()">
        <label class="form-check-label" for="DarkMode">Dark Mode</label>
      </div>
    </div>
  </div>
</div>