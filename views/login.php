<?php
include('../views/layout/header.php');
?>





<form id="admin" method="post" action="../controller/users_form.php">
    <table>
        <tr>
            <td>
                <label>
                    User Name
                </label>
            </td>
            <td>
                <input name="username" type="text" width="100" id="username"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    Email Id
                </label>
            </td>
            <td>
                <input name="email_id" type="text" width="100" id="email"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>
                    Password
                </label>
            </td>
            <td>
                <input name="password" type="password" width="100" id="password"/>
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <input type="submit" value="Login">
            </td>
        </tr>
    </table>
</form>


<?php
include('../views/layout/footer.php');
?>