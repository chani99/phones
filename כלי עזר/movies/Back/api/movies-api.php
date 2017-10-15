<?php
    require_once 'abstract-api.php';
    require_once 'api.php';
    require_once '../controllers/MoviesController.php';

    class MoviesApi extends Api{

        // Create a new movie
        function Create($params) {
            $c = new MoviesController;
            return $c->CreateMovie($params);
        }
        

         // Get all movies or check if a id exists
        function Read($params) {
            $c = new MoviesController;
        
             if (array_key_exists("id", $params)) {
                $movies = $c->getMoviesById($params);
                return $movies;
            }
            else {
                return $c->getAllMovies();
            }
        } 


        // Update a movie
        function Update($params) {
            $c = new MoviesController;
            $movies = $c->UpdateMoviesById($params);
            return $movies;
            }

            
        //  Delete 1 movie   
         function Delete($params) {
            $c = new MoviesController;
            $movies = $c->DeleteMoviesById($params);
            return $movies;
            
        }

    }
?>
