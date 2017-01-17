<link rel="stylesheet" type="text/css" href="../css/edit.css">

<?php
//Checking that if some body has clicked 'edit' button and also some 'id' is received.

if($_GET && ($_GET['edit'] == 'Edit') && $_GET['id'])
{
?>
    <script src="../js/library/jquery-3.1.1.slim.min.js"></script>
    <script src="../js/library/jquery.validate.min.js"></script>
    <script src="../js/newFunction.js"></script>
<div id = 'editUserForm'>
    <form method = 'get' action = '../controller/users_form.php' id="editUser">
        <table>
            <input type = 'hidden' name = 'id' value = '<?php echo $_GET['id']; ?>'>
            <tr>
                <td>First Name: </td>
                <td><input type = 'text' name = 'firstname' value = '<?php echo $_GET['firstname']; ?>'></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type = 'text' name = 'lastname' value = '<?php echo $_GET['lastname']; ?>'></td>
            </tr>
            <tr>
                <td> Email ID: </td>
                <td><input type = 'text' name = 'emailId' value = '<?php echo $_GET['emailId']; ?>'></td>
            </tr>
            <tr>
                <td>Description: </td>
                <td><input type = 'text' name = 'description' value = '<?php echo $_GET['description']; ?>'></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td><input type = 'text' name = 'gender' value = '<?php echo $_GET['gender']; ?>'></td>
            </tr>
            <tr>
                <td></td>
                <td><input type = 'submit' name = 'updateUser' value = 'Update User'></td>
            </tr>
        </table>
    </form>
</div>
<?php
}
    