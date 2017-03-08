<?php
include('../views/layout/header.php');
?>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
include_once ('../models/users.php');

if($_POST) {
    //Call model functions in this controller to manipulate and save/update/delete/retrieve data.
    $userObj = new User();
    $userObj->save($_POST["firstname"], $_POST["lastname"], $_POST["email_id"], $_POST["description"], $_POST["gender"]);
}

//Checking that if somebody have submitted form with method GET and sent $_GET['delete']
if($_GET && isset($_GET['delete']) && $_GET['delete'] == 'Delete')
{
    //Calling function to remove a record and passing user ID to that function.
    $userObj = new User();
    $userObj->delete($_GET['recordId']);
}

//If EDIT USER form submitted.
if($_GET && isset($_GET['updateUser']) && $_GET['updateUser'] == 'Update User')
{
    $userObj = new User();
    $userObj->update($_GET);
}

//Call the function function for get users, the function will return data in the form of Array.
$userObj = new User();
$users = $userObj->get();
//echo '<pre>';
//print_r($users);
//die;
//Apply for or foreach loop to list all the users in the table format.
if (!isset($_SESSION['auth'])) {
    header('Location: '.PROJECT_DIR.'/views/login.php');
    die;
}

if (is_array($users) && $users) {
    echo "<table id ='custom'>
               <tr> 
                    <th>S.no</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>EmailId</th>
                    <th>Description</th>
                    <th>Gender</th>
                    <th></th>
               </tr>";
    foreach ($users as $i => $user) {

        //Change gender value to display string instead of integer.
        if($user['gender'] == 1)
        {
            $gender = "female";
        }
        else
        {
           $gender = "male";
        }


         echo "<tr>
                    <td>".($i+1)."</td>
                    <td>".$user['firstname']."</td>
                    <td>".$user['lastname']."</td>
                    <td>".$user['email_id']."</td>
                    <td>".$user['description']."</td>
                    <td>".$gender."</td>
                    <td>
                    <form method = 'get' action = ''>
                        <input name = 'delete' type = 'submit' value = 'Delete'>
                        <input name = 'recordId' type = 'hidden' value = '".$user['id']."'>
                    </form>
                    </td>                   
                    <td>
                     <form method = 'get' action = '../views/edit_user.php'>
                        <input name = 'edit' type = 'submit' value = 'Edit'>
                        <input name = 'id' type = 'hidden' value = '".$user['id']."'>
                        <input name = 'firstname' type = 'hidden' value = '".$user['firstname']."'>
                        <input name = 'lastname' type = 'hidden' value = '".$user['lastname']."'>
                        <input name = 'emailId' type = 'hidden' value = '".$user['email_id']."'>
                        <input name = 'description' type = 'hidden' value = '".$user['description']."'>
                        <input name = 'gender' type = 'hidden' value = '".$user['gender']."'>
                    </form>
                    </td>
             </tr>";

    }
    echo "</table>";
}
include('../views/layout/footer.php');
?>
