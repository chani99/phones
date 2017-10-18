<?php

$fileError = $_FILES['file']['error'];
    if ( 0 < $fileError ) {
        echo false;
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], '../images/' . $_FILES['file']['name']);
        echo true;
    }
?>