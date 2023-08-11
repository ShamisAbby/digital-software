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
          <h6 class="mb-0 fw-bold text-dark">New Category</h6>
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

      <div class="card rounded-3 border-0 bg-transparent">
        <div class="card-body p-0">
          <form action="./handler/add-category.php" method="post" enctype="multipart/form-data">
            <div class="row row-cols-1 g-3">
              <div class="col">
                <div class="form-floating">
                  <input type="text" class="form-control rounded-3" id="category_name" placeholder="Category Name" name="category_name" required maxlength="13">
                  <label for="category_name" id="label1">Category Name</label>
                  <label for="category_name" id="label2" style="display: none; color:red;">Name must have lessthen 15 charcter</label>

                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label class="form-label">Descriptions</label>
                  <textarea class="form-control rounded-3" rows="4" cols="4" name="description" required></textarea>
                </div>
              </div>
              <div class="col">
                <div class="drop-zone" id="dropZone">
                  <i class="bi bi-cloud-upload fs-1"></i>
                  <p class="my-2">Drag and drop an image here or click to browse.</p>
                  <input type="file" id="fileInput" accept=".jpg, .jpeg, .png" style="display: none;" name="category_img" required>
                </div>
              </div>
              <div class="col">
                <div id="preview"></div>
              </div>

            </div>
            <!--start to footer-->

            <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center gap-3">
              <button name="submit" type="submit" class="btn btn-ecomm btn-outline-dark rounded-3 flex-fill">SAVE</button>
              <a href="javascript:;" class="btn btn-ecomm btn-dark rounded-3 flex-fill">CENCEL</a>
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
  <script>
    const dropZone = document.getElementById('dropZone');
    const fileInput = document.getElementById('fileInput');

    dropZone.addEventListener('dragover', (e) => {
      e.preventDefault();
      dropZone.classList.add('active');
    });

    dropZone.addEventListener('dragleave', () => {
      dropZone.classList.remove('active');
    });

    dropZone.addEventListener('drop', (e) => {
      e.preventDefault();
      dropZone.classList.remove('active');

      const files = e.dataTransfer.files;
      if (files.length > 0) {
        fileInput.files = files;
        // Manually trigger the 'change' event handler
        fileInput.dispatchEvent(new Event('change'));
      }
    });


    // Trigger file input click when the drop zone is clicked
    dropZone.addEventListener('click', () => {
      fileInput.click();
    });

    fileInput.addEventListener('change', () => {
      const file = fileInput.files[0]; // getting the file
      const preview = document.getElementById('preview'); // getting the preview element

      if (file) {
        // if it's an image, display a preview
        if (file.type.startsWith('image/')) {
          const reader = new FileReader();
          reader.onloadend = () => {
            preview.innerHTML = `<img src="${reader.result}" alt="Image preview" style="max-width: 100%;">`;
          };
          reader.readAsDataURL(file);
        }
        // if it's not an image, display the file name
        else {
          preview.innerText = file.name;
        }
      }
    });

    var input = document.getElementById('category_name');
    var label1 = document.getElementById('label1');
    var label2 = document.getElementById('label2');

    input.addEventListener('input', function() {
      if (input.value.length > 10) {
        input.value = input.value.slice(0, 13);
        label1.style.display = "none";
        label2.style.display = "block";
      }
    });
  </script>
  <?php
  require_once("./element/js-link.php")
  ?>
</div>