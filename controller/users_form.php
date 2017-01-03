<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
include_once ('../models/users.php');

if($_POST) {
    //Call model functions in this controller to manipulate and save/update/delete/retrieve data.
    saveUser($_POST["firstname"], $_POST["lastname"], $_POST["email_id"], $_POST["description"], $_POST["gender"]);
}

//Checking that if somebody have submitted form with method GET and sent $_GET['delete']
if($_GET && $_GET['delete'] && $_GET['delete'] == 'Delete')
{
    //Calling function to remove a record and passing user ID to that function.
    deleteUser($_GET['recordId']);
}
 
//Call the function function for get users, the function will return data in the form of Array.
$users = getUser();
//echo '<pre>';
//print_r($users);
//die;
//Apply for or foreach loop to list all the users in the table format.
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
         echo "<tr>
                    <td>".($i+1)."</td>
                    <td>".$user['firstname']."</td>
                    <td>".$user['lastname']."</td>
                    <td>".$user['email_id']."</td>
                    <td>".$user['description']."</td>
                    <td>".$user['gender']."</td>
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
?>
