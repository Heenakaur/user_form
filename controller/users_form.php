<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php
include_once ('../models/users.php');

if($_POST) {
    //Call model functions in this controller to manipulate and save/update/delete/retrieve data.
    saveUser($_POST["firstname"], $_POST["lastname"], $_POST["email_id"], $_POST["description"], $_POST["gender"]);
}

if($_GET && $_GET['delete'] && $_GET['delete'] == 'Delete')
{
    //Add code to delete the record.
    echo $_GET['recordId'];
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
                      <td class='sam'>".($i+1)."</td>
                     <td class='sam'>".$user['firstname']."</td>
                     <td class='sam'>".$user['lastname']."</td>
                     <td class='sam'>".$user['email_id']."</td>
                     <td class='sam'>".$user['description']."</td>
                     <td class='sam'>".$user['gender']."</td>
                     <td>
                        <form method = 'get' action = ''>
                            <input name = 'delete' type = 'submit' value = 'Delete'>
                            <input name = 'recordId' type = 'hidden' value = '".$user['id']."'>
                        </form>
                     </td>
                 </tr>";

    }
    echo "</table>";
}
?>
