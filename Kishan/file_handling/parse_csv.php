<?php
$val = fopen("excel.csv", "r");
if ($val !== FALSE) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table th,
            td {
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <div>
            <table style="border:1px solid black">
                <?php
                while (!feof($val)) {
                    $data = fgetcsv($val, 1000, ",");
                    if (!empty($data)) {
                ?>
                        <tr>
                            <td><?php echo $data[0]; ?></td>
                            <td>
                                <div><?php echo $data[1]; ?></div>
                            </td>
                            <td>
                                <div><?php echo $data[2]; ?></div>
                            </td>
                            <td>
                                <div><?php echo $data[3]; ?></div>
                            </td>
                        </tr>
                    <?php } ?>

                <?php
                }
                ?>
            </table>
        </div>
    </body>

    </html>

<?php
}
fclose($val);
?>