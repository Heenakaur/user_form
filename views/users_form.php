<?php
include('../views/layout/header.php');
?>


<script src="../js/myFunction.js"></script>
<style>

    label.error {
        color: red;
        display: block;
        line-height: 16px;
    }
    td {
        font-size: 24px;
        font-weight: bold;
    }


</style>


        <form id="user" method="post" action="../controller/users_form.php">
                        <table>
                            <tr>
                                <td>
                                    <label>
                                        First Name
                                    </label>
                                </td>
                                <td>
                                    <input name="firstname" type="text" width="100" id="firstname"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        Last Name
                                    </label>
                                </td>
                                <td>
                                    <input name="lastname" type="text" width="100" id="lastname"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        Email ID
                                    </label>
                                </td>
                                <td>
                                    <input name="email_id" type="text" width="100" id="email"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        Description of user
                                    </label>
                                </td>
                                <td>
                                    <input name="description" type="text" width="1000" id="description"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        Gender
                                    </label>
                                </td>
                    <td>
                        <label>  <input type="radio" name="gender" value="male" class="gender">Male </label>
                        <label> <input type="radio" name="gender" value="female" class="gender"> Female </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Skills
                        </label>
                    </td>
                    <td>
                        <input type="checkbox" name="checkbox" id="teacher" value="1"/>
                        <label for="teacher">Teacher</label>

                        <input type="checkbox" name="checkbox" id="engineer" value="2"/>
                        <label for="engineer">Engineer</label>

                        <input type="checkbox" name="checkbox" id="housewife" value="3"/>
                        <label for="housewife">Housewife</label>

                        <input type="checkbox" name="checkbox" id="ca" value="4"/>
                        <label for="ca">CA</label>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="button" value="Show Information">
                    </td>
                </tr>
            </table>

            <div id="selectedData">
            </div>
        </form>
        <p>Below all the selected data will be displayed:</p>
<?php
include('../views/layout/footer.php');
?>

