<?php include ('../index.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <script src="<?php echo JS_PATH ?>/library/jquery-3.1.1.slim.min.js"></script>
        <script src="<?php echo JS_PATH ?>/library/jquery.validate.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH ?>/common.css">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <?php
                    if (isset($_SESSION['auth'])) {
                ?>
                    <form action="<?php echo PROJECT_DIR?>/controller/auth.php"
                          method="post" style="float: right;">
                        <input type='submit' name="logout" value="Logout"/>
                    </form>
                <?php
                    }
                ?>
            </div>
