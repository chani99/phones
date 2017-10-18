<?php
    require_once 'manu-api.php';
    require_once 'phones-api.php';
    

    $method = $_SERVER['REQUEST_METHOD']; 
    $params = $_REQUEST['activitiesArray'];

// handle files uploaded
    if ( 0 < $_FILES['file']['error'] ) {
        echo false;
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
        echo true;
    }

    

    switch ($params['ctrl']) {
        
            case 'phones':
            $capi = new PhoneApi();
            $result  = $capi->gateway($method, $params);
            echo json_encode($result);
            break;

            case 'manu':
            $capi = new ManuApi();
            $result = $capi->gateway($method, $params);
            echo json_encode($result);
            
            break;
    }


?>
