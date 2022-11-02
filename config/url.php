<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : '';
switch ($page) {
    case 'login':
        include "view/auth/login.php";
        break;
    case 'register':
        include "view/auth/register.php";
        break;
        //home
    case 'home':
        include "view/mahasiswa/view_mahasiswa.php";
        break;
        //mahasiswa
    case 'mahasiswa':
        include "view/mahasiswa/view_mahasiswa.php";
        break;
    case 'tambah_mahasiswa':
        include "view/mahasiswa/tambah_mahasiswa.php";
        break;
    case 'edit_mahasiswa':
        include "view/mahasiswa/edit_mahasiswa.php";
        break;

    default:
        include "view/home/profil.php";
}
