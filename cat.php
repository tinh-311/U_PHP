<?php
include './config.php';
include './function.php';

spl_autoload_register('loadClass');
?>

<html>
    <head>
        <title> Category </title>
    </head>

    <body>
        <?php
            $obj = new Category();
            $data = $obj->all();
            print_r($data);
        ?>
    </body>
</html>