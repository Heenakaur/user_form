<?php
include('../views/layout/header.php');
include_once ('../models/admin.php');


if($_POST) {
        $is_userexit= "get admin by username"($_POST['username']);
        if($is_userexit){
                $is_valid="validate admin by password"($_POST['password']);
        if($is_valid){
                //save the id
        }
        }
        else{
                //redireact back to login page
        }
}
else{
        //redireact back
}