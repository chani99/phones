<?php
    require_once 'manu-api.php';
    require_once 'phones-api.php';
    

    $method = $_SERVER['REQUEST_METHOD']; 
    $params = $_REQUEST['activitiesArray'];


    

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
