<?php 
    require_once 'controller.php';
    require_once '../models/MoviesModel.php';
    require_once '../data/bl.php';
    

    class MoviesController extends Controller {
        private $db;
        private $table_name = "movies";
        private $classneame = "MoviesController";
        

        function __construct() {
            $this->db = new BL();
        }
        

        // Creates a new line in director table
        function CreateMovie($param) {
            $c = new MoviesModel($param);
            if($c->getName() != 'null' & $c->getd_id() != 'null'){
            $column="name, d_id";
            $values=":name, :d_id";
            $exicute = array(
                    "name"=> $c->getName(),
                    "d_id"=> $c->getd_id());
            $update = $this->db->create_new_row($this->table_name, $column, $values, $exicute);
            return $this->checkIsWasGood($update);
            }else{
                return "d_id is " . $c->getd_id() . "name is " .  $c->getName();
            }
        }

            

        // Selects all from directors table and returns a object array
        function getAllMovies() {
            $allMovies = array();

            $selected_tables = "movies.id, movies.name ,directors.name as Director_Name";
            $table2 = 'directors';
            $Column_equal_to = 'movies.d_id = directors.id';

            $getall = $this->db->innerJoin($selected_tables, $this->table_name, $table2, $Column_equal_to);
            for($i=0; $i<count($getall); $i++) {
                $c = new MoviesModel($getall[$i]);
                array_push($allMovies, $c->jsonSerialize());
            }
            return $allMovies;   
        }
        

        // Checks if a id exists
         function getMoviesById($param){
            $c = new MoviesModel($param);
            if($c->getId() != 'null' || $c->getId() != 'NaN'){
            $check =  $this->db->Check_if_id_exists($this->table_name, $c->getId());
            return $this->checkIsWasGood($check);
            }else{
                return $c->getId();
            }

            }




        // Deletes a line from directors table
        function DeleteMoviesById($param) {
            $c = new MoviesModel($param);
            if($c->getId() != 'null' || $c->getId() != 'NaN'){
            $deleted =  $this->db->DeleteRow($this->table_name, $c->getId());
            return $this->checkIsWasGood($deleted);
            }else{
                return $c->getId();
            }

    
        }


        
        // Updates a line in directos table
        function UpdateMoviesById($param) {
            $c = new MoviesModel($param);
            if($c->getId() != false || $c->getId() != false){
                if($c->getName() != false) {
            $updateValues= "name =  '".$c->getName()."', d_id = " .$c->getd_id();
            $update =  $this->db->update_table($this->table_name, $c->getId(), $updateValues);
            return $this->checkIsWasGood($update);
            }else{
                return "error";
            }
        }

        }


}