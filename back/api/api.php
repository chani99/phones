<?php
    require_once 'manu-api.php';
    require_once 'phones-api.php';
    

    $method = $_SERVER['REQUEST_METHOD']; 
    // $method = "GET"; 

    // if($method == 'PUT' || $method == 'DELETE') {
    //     parse_str(file_get_contents("php://input"),$post_vars);
    //     $params = $post_vars['activitiesArray']; 
    // }
    // else{
        $params = $_REQUEST['activitiesArray'];
        // $params = ["ctrl" => "phones"];

    // }
    

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
