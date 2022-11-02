<?php
$page = $_GET['page'];
?>
<div class="col-md-3 ps-0 pe-0 bg-ungu2 min-vh-100">
    <div class="d-flex flex-column flex-shrink-0 p-4 bg-ungu2 sidebar-new text-white">
        <div class="d-flex flex-column align-items-start mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
            <span class="fs-5 fw-bold">Halo, namamu</span>
            <span>(email@gmail.com)</span>
        </div>
        <hr />
        <ul class="nav nav-pills flex-column mb-auto">
            <li>

                <a href="./index.php?page=mahasiswa" class="btn btn-toggle align-items-center rounded <?php echo ($page) == 'mahasiswa' ? 'active' : '' ?>">
                    <i class="fa fa-graduation-cap me-2"></i>
                    Mahasiswa
                </a>
            </li>
            <li>

                <a href="./index.php?page=link_here" class="btn btn-toggle align-items-center rounded <?php echo ($page) == 'other' ? 'active' : '' ?>">
                    <i class="fa fa-bars me-2"></i>
                    Other menu...
                </a>
            </li>
        </ul>
    </div>
</div>