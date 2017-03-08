<?php
include('../views/layout/header.php');
if (!isset($_SESSION['auth'])) {
    header('Location: '.PROJECT_DIR.'/views/login.php');
    die;
}
?>
    <link rel="stylesheet" type="text/css" href="../css/edit.css">
<?php
//Checking that if some body has clicked 'edit' button and also some 'id' is received.

if($_GET && ($_GET['edit'] == 'Edit') && $_GET['id'])
    ?>
    <script src="../js/newFunction.js"></script>
    <div id='editUserForm'>
        <form method='get' action='../controller/users_form.php' id="editUser">
            <table>
                <input type='hidden' name='id' value='<?php echo $_GET['id']; ?>'>
                <tr>
                    <td>First Name:</td>
                    <td><input type='text' name='firstname' value='<?php echo $_GET['firstname']; ?>'></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type='text' name='lastname' value='<?php echo $_GET['lastname']; ?>'></td>
                </tr>
                <tr>
                    <td> Email ID:</td>
                    <td><input type='text' name='emailId' value='<?php echo $_GET['emailId']; ?>'></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>
                        <textarea name='description'><?php echo $_GET['description']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <?php
                        if ($_GET['gender'] == 1) {
                            ?>
                            <label><input type="radio" name='gender' value='0'> Male</label>
                            <label><input type="radio" name='gender' value="1" checked> Female</label>

                            <?php
                        } else {
                            ?>
                            <label><input type="radio" name='gender' value='0' checked> Male</label>
                            <label><input type="radio" name='gender' value="1"> Female</label>
                            <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type='submit' name='updateUser' value='Update User'></td>
                </tr>
            </table>
        </form>
    </div>
<?php
    include('../views/layout/footer.php');
?>


