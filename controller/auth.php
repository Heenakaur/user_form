<?php

include('../views/layout/header.php');
include_once('../models/admin.php');

if ($_POST) {
    $isUserExit = getAdminByusername($_POST['username']);
    if ($is_userexit) {
        $isPasswordValid = validatePasswordOfAdmin($_POST['username'], $_POST['password']);
        if ($isPasswordValid) {
            //save the id into session.
        }
    } else {
        //redireact back to login page.
        header('Location: '.PROJECT_DIR.'/views/login.php');
        die;
    }
} else {
    //redireact back
    header('Location: '.PROJECT_DIR.'/views/login.php');
    die;
}

include('../views/layout/footer.php');