<?php
    require_once 'abstract-api.php';
    require_once 'api.php';
    require_once '../controllers/manuController.php';

    class ManuApi extends Api{

        // Create a new manu
        function Create($params) {
            $c = new ManuController;
            return $c->CreateManu($params);
        }
        

         // Get all directors or check if a id exists
        function Read($params) {
            $c = new ManuController;

             if (array_key_exists("select", $params)) {
                $manu = $c->ReturnSelect();
                return $manu;
            }
        
            if (array_key_exists("id", $params)) {
                // $director = $c->getDirecotrById($params);
                // return $director;
            }

            else {
                return $c->getAllManu();
            }
        } 


        // Update a director
        function Update($params) {
            // $c = new ManuController;
            // $director = $c->UpdateDirecotrById($params);
            return $director;
            }

            
        //  Delete 1 director   
         function Delete($params) {
            // $c = new ManuController;
            // $director = $c->DeleteDirecotrById($params);
            return $director;
            
        }

    }
?>
