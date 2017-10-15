<?php
    require_once 'abstract-api.php';
    require_once 'api.php';
    require_once '../controllers/DirectorsController.php';

    class DirectorApi extends Api{

        // Create a new director
        function Create($params) {
            $c = new DirectorController;
            return $c->CreateDirector($params);
        }
        

         // Get all directors or check if a id exists
        function Read($params) {
            $c = new DirectorController;

             if (array_key_exists("select", $params)) {
                $director = $c->ReturnSelect();
                return $director;
            }
        
            if (array_key_exists("id", $params)) {
                $director = $c->getDirecotrById($params);
                return $director;
            }

            else {
                return $c->getAllDirectors();
            }
        } 


        // Update a director
        function Update($params) {
            $c = new DirectorController;
            $director = $c->UpdateDirecotrById($params);
            return $director;
            }

            
        //  Delete 1 director   
         function Delete($params) {
            $c = new DirectorController;
            $director = $c->DeleteDirecotrById($params);
            return $director;
            
        }

    }
?>
