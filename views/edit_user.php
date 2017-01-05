<?php
/**
 * Created by PhpStorm.
 * User: jsingh7
 * Date: 1/3/2017
 * Time: 3:09 PM
 */

//Checking that if some body has clicked 'edit' button and also some 'id' is received.
if( ($_GET['edit'] == 'Edit') && $_GET['id'] )
{
    //Todo: Here you will get the data in $_GET variable.
    //Todo: So make HTML form and fill the data inside the form. The form design will be similar to 'add user form'.

    //Below I have shown an example.
?>
   <table id ='sam'
          <tr>
              <th>Id</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>EmailId</th>
              <th>Description</th>
              <th>Gender</th>
          </tr>
          <tr>
              <td>
                  <form method = 'get' action = '../views/edit_user.php'
                  <input type = 'text' name = 'id' value = '<?php echo $_GET['id']; ?>'>
                  <input type = 'text' name = 'firstname' value = '<?php echo $_GET['firstname']; ?>'>
                  <input type = 'text' name = 'lastname' value = '<?php echo $_GET['lastname']; ?>'>
                  <input type = 'text' name = 'emailId' value = '<?php echo $_GET['email_id']; ?>'>
                  <input type = 'text' name = 'description' value = '<?php echo $_GET['description']; ?>'>
                  <input type = 'text' name = 'gender' value = '<?php echo $_GET['gender']; ?>'>
                  </form>
              </td>
          </tr>
   </table>
<?php
}
    