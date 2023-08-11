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
          <div class="account-my-profile">
            <h6 class="mb-0 fw-bold text-dark">My Profile</h6>
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
          <h6 class="mb-0 fw-bold mt-3 text-dark"><?php echo $user;  ?></h6>
        </div>

        <?php
        require_once('./handler/connection.php');
        $userId = $_SESSION["id"];
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE `user_id` = $userId");
        $stmt->execute();
        $result = $stmt->fetch();

        ?>

        <div class="card rounded-3 border-0 bg-transparent">
          <div class="card-body p-0">
            <form action="./handler/user-profile.php" method="post">
              <div class="row row-cols-1 g-3">
                <div class="col">
                  <div class="form-floating">
                    <input type="text" class="form-control rounded-3" id="floatingInputName" name="Name" placeholder="Name" value="<?php echo $result['username']; ?>">
                    <label for="floatingInputName">Name</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input type="tel" class="form-control rounded-3" id="floatingInputNumber" name="Mobile" placeholder="Name" value="<?php echo $result['phone']; ?>">
                    <label for="floatingInputNumber">Mobile Number</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input type="email" class="form-control rounded-3" id="floatingInputEmail" name="Email" placeholder="Email" value="<?php echo $result['email']; ?>">
                    <label for="floatingInputEmail">Email</label>
                  </div>
                </div>
                <!-- <div class="col">
                 <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                   <label class="form-check-label" for="inlineRadio1">Male</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                   <label class="form-check-label" for="inlineRadio2">Female</label>
                 </div>
               </div> -->
                <!-- <div class="col">
                 <div class="form-floating">
                   <input type="date" class="form-control rounded-3" id="floatingInputDOB" value="">
                   <label for="floatingInputDOB">Date of Birth</label>
                 </div>
               </div> -->
                <div class="col">
                  <div class="form-floating">
                    <input type="text" class="form-control rounded-3" id="floatingInputLocation" name="Location" placeholder="Location" value="<?php echo $result['location']; ?>">
                    <label for="floatingInputLocation">Location</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input type="password" class="form-control rounded-3" id="current_password" name="current_password" placeholder="Current Password">
                    <label for="current_password">Current Password</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input type="password" class="form-control rounded-3" id="new_password" name="new_password" placeholder="New Password">
                    <label for="new_password">New Password</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-floating">
                    <input type="password" class="form-control rounded-3" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                    <label for="confirm_password">Confirm Password</label>
                  </div>
                </div>
              </div>

              <!--start to footer-->
              <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center gap-3">
                <button type="submit" name="submit" class="btn btn-ecomm btn-outline-dark rounded-3 flex-fill">Save</button>
                <div class="vr"></div>
                <a href="javascript:;" class="btn btn-ecomm btn-dark rounded-3 flex-fill">Cancel</a>
              </footer>
              <!--end to footer-->
            </form>
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