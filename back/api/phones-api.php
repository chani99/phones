<?php
    require_once 'abstract-api.php';
    require_once 'api.php';
    require_once '../controllers/phoneController.php';

    class PhoneApi extends Api{

        // Create a new movie
        function Create($params) {
            $c = new phoneController;
            return $c->CreatePhone($params);
        }
        

         // Get all movies or check if a id exists
        function Read($params) {
            $c = new phoneController;
        
             if (array_key_exists("id", $params)) {
                // $movies = $c->getMoviesById($params);
                // return $movies;
            }
            else {
                return $c->getAllPhones2();
            }
        } 


        // Update a movie
        function Update($params) {
            // $c = new MoviesController;
            // $movies = $c->UpdateMoviesById($params);
            return $movies;
            }

            
        //  Delete 1 movie   
         function Delete($params) {
            // $c = new MoviesController;
            // $movies = $c->DeleteMoviesById($params);
            return $movies;
            
        }

    }
?>
