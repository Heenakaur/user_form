<?php
include('/../views/layout/header.php');
include_once('/../models/admin.php');
if($_POST) {
    //To make admin log in.
    if (isset($_POST['login']) && $_POST['login'] == 'Login') {
        $adminObj = new Admin();
        $adminObj->$isUserExit = getByUsername($_POST['username']);

        if ($isUserExit) {
            $adminObj = new Admin();
            $adminObj->$isPasswordValid = validatePassword($_POST['username'], $_POST['password']);

            if ($isPasswordValid) {
                //save the id into session.
                $_SESSION['auth'] = $isUserExit[0];
                header('Location: ' . PROJECT_DIR . '/views/users_form.php');
                die;
            } else {
                //redireact back to login page.
                header('Location: ' . PROJECT_DIR . '/views/login.php');
                die;
            }
        } else {
            //redireact back to login page.
            header('Location: ' . PROJECT_DIR . '/views/login.php');
            die;
        }
    } else if (isset($_POST['logout']) && $_POST['logout'] == 'Logout') {
        unset($_SESSION['auth']);
        header('Location: ' . PROJECT_DIR . '/views/login.php');
        die;
    } else {
        //redireact back
        header('Location: ' . PROJECT_DIR . '/views/login.php');
        die;
    }
}

include('../views/layout/footer.php');