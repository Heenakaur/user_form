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


    <input type = 'text' name = '' value = '<?php echo $_GET['firstname']; ?>'>


<?php
}
    