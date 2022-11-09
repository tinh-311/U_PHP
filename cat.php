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
        ?>
        <table>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>#</td>
            </tr>
            <?php
                foreach($data as $item) {
                    ?>
                        <tr>
                            <td>
                                <?php
                                    echo $item['cat_id']
                                ?>
                            </td>

                            <td>
                                <?php
                                    echo $item['cat_name']
                                ?>
                            </td>

                            <td>
                                <a href="cat_delete.php?id=<?php echo $item['cat_id'] ?>">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html>