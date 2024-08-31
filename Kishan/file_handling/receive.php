<?php
$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
if (move_uploaded_file($tmp_name, $name)) {
    echo "File is uploaded successfully.";
} else {
    echo "File cannnot be uploaded.";
}
