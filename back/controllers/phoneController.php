<?php 
    require_once 'controller.php';
    require_once '../models/phoneModel.php';
    require_once '../data/bl.php';
    

    class phoneController extends Controller {
        private $db;
        private $table_name = "phones";
        private $classneame = "phoneController";
        

        function __construct() {
            $this->db = new BL();
        }
        

        // Creates a new line in director table
        function CreatePhone($param) {
            $c = new phoneModel($param);
            if($c->getName() != 'null'){
            $column="name, manu, image";
            $values=":name, :manu, :image";
            $exicute = array(
                    "name"=> $c->getName(),
                    "manu"=> $c->getManuName(),
                    "image"=> $c->getImage());
            $update = $this->db->create_new_row($this->table_name, $column, $values, $exicute);
            return $this->checkIsWasGood($update);
            }else{
                return "id is " . $c->getd_id() . "name is " .  $c->getName();
            }
        }

            

        // Selects all from directors table and returns a object array
        function getAllPhones() {
            $allPhones = array();

            $selected_tables = "phones.id, phones.name ,phones.image, phones.manu";
            $table2 = 'manu';
            $Column_equal_to = 'phones.manu = manu.id';

            $getall = $this->db->innerJoin($selected_tables, $this->table_name, $table2, $Column_equal_to);
            for($i=0; $i<count($getall); $i++) {
                $c = new phoneModel($getall[$i]);
                array_push($allPhones, $c->jsonSerialize());
            }
            return $allPhones;   
        }
        
            function getAllPhones2() {
            $allPhones = array();
            $getall = $this->db->SelectAllFromTable($this->table_name, $this->classneame);
            
            for($i=0; $i<count($getall); $i++) {
                $c = new phoneModel($getall[$i]);
                array_push($allPhones, $c->jsonSerialize());
            }
            return $allPhones;   
        }


        // // Checks if a id exists
        //  function getMoviesById($param){
        //     $c = new MoviesModel($param);
        //     if($c->getId() != 'null' || $c->getId() != 'NaN'){
        //     $check =  $this->db->Check_if_id_exists($this->table_name, $c->getId());
        //     return $this->checkIsWasGood($check);
        //     }else{
        //         return $c->getId();
        //     }

        //     }




        // // Deletes a line from directors table
        // function DeleteMoviesById($param) {
        //     $c = new MoviesModel($param);
        //     if($c->getId() != 'null' || $c->getId() != 'NaN'){
        //     $deleted =  $this->db->DeleteRow($this->table_name, $c->getId());
        //     return $this->checkIsWasGood($deleted);
        //     }else{
        //         return $c->getId();
        //     }

    
        // }


        
        // // Updates a line in directos table
        // function UpdateMoviesById($param) {
        //     $c = new MoviesModel($param);
        //     if($c->getId() != false || $c->getId() != false){
        //         if($c->getName() != false) {
        //     $updateValues= "name =  '".$c->getName()."', d_id = " .$c->getd_id();
        //     $update =  $this->db->update_table($this->table_name, $c->getId(), $updateValues);
        //     return $this->checkIsWasGood($update);
        //     }else{
        //         return "error";
        //     }
        // }

        // }


}