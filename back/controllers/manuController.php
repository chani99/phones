<?php 
    require_once 'controller.php';
    require_once '../models/manuModel.php';
    require_once '../data/bl.php';
    

    class ManuController extends Controller {
        private $db;
        private $table_name = "manu";
        private $classneame = "ManuController";
        

        function __construct() {
            $this->db = new BL();
        }
        

    
        // Updates a line in directos table
        function ReturnSelect() {
            $List =  $this->db->SelectAllFromTable($this->table_name, $this->classneame);
            $manuSelect="<option value='selectManu'>select a option</option><option value='all'>all</option>";
                for ($i = 0; $i < count($List); $i++) {
                $manuSelect .= "<option value=" . $List[$i]["name"] . ">" . $List[$i]["name"] . "</option>";
                }
        
            return $manuSelect; 
        }
    

        // Selects all from directors table and returns a object array
        function getAllManu() {
            $allmanu = array();
            $getall = $this->db->SelectAllFromTable($this->table_name, $this->classneame);
            
            for($i=0; $i<count($getall); $i++) {
                $c = new manuModel($getall[$i]);
                array_push($allmanu, $c->jsonSerialize());
            }
            return $allmanu;   
        }




}