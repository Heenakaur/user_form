<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
include_once ('../models/users.php');

if($_POST) {
    //Call model functions in this controller to manipulate and save/update/delete/retrieve data.
    saveUser($_POST["firstname"], $_POST["lastname"], $_POST["emailid"], $_POST["description"], $_POST["gender"]);
}

//Call the function function for get users, the function will return data in the form of Array.
$users = getUser();
//echo '<pre>';
//print_r($users);
//die;
//Apply for or foreach loop to list all the users in the table format.
if (is_array($users) && $users) {
    foreach ($users as $i => $user) {
        echo '<div class = "custom">'.$user['firstname'].' '.$user['lastname'].'</div>';
    }
}
?>