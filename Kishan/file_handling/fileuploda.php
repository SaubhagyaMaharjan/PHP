<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File uploading </title>
</head>

<body>

    <form action="receive.php" enctype="multipart/form-data" method="post">
        <input type="file" name="file" />
        <input type="submit" value="upload" name="Submit" />
    </form>
</body>

</html>