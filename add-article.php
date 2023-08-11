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
                    <h6 class="mb-0 fw-bold text-dark">New Article</h6>
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
                    <form method="post" action="./handler/add-article.php" enctype="multipart/form-data">
                        <div class="form-body">
                            <h5 class="mb-0 fw-bold">Upload New Article</h5>
                            <div class="my-3 border-bottom"></div>
                            <div class="mb-3">
                                <label class="form-label">Article Title</label>
                                <input type="text" class="form-control rounded-3" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Article link</label>
                                <input type="text" class="form-control rounded-3" name="article_link">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Article category</label>

                                <select id="" class="form-control rounded-3" name="category_id">
                                    <option value="" selected>--- select category ---</option>
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM categories");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();
                                    foreach ($result as $res) {
                                    ?>
                                        <option value="<?php echo $res['category_id'] ?>"><?php echo $res['category_name'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Article File</label>
                                <input type="file" class="form-control rounded-3" name="article_file" accept=".pdf">
                            </div>
                            <div class="mb-3">
                                <div class="drop-zone" id="dropZone">
                                    <i class="bi bi-cloud-upload fs-1"></i>
                                    <p class="my-2">Drag and drop an image here or click to browse.</p>
                                    <input type="file" id="fileInput" accept=".jpg, .jpeg, .png" style="display: none;" name="article_img">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div id="preview"></div>
                            </div>
                        </div>
                        <!--start to footer-->
                        <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center gap-3">
                            <button type="submit" name="submit" class="btn btn-ecomm rounded-3 btn-dark flex-fill" onclick="return confirm('Double check the Article before publish it')"><i class="bi bi-send me-2"></i>Upload Article</button>
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
    </script>
    <?php
    require_once("./element/js-link.php")
    ?>
</div>