<!DOCTYPE html>
<html>
    <head>
        <title>Home MVC</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo $GLOBALS['path'] ?>/assets/css/style.css" type="text/css" >
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">DAFTAR USER</div>
                <?php
                    foreach ($data['users'] as $user) { ?>
                    <p><?php echo $user['username']; ?></p>
                <?php
                  }
                ?>
            </div>
        </div>
    </body>
</html>
