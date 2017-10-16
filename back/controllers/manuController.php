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
        

        // // Creates a new line in director table
        // function CreateDirector($param) {
        //     $c = new DirectorModel($param);
        //     if($c->getName() != 'null'){
        //     $column="name";
        //     $values=":name";
        //     $exicute = array(
        //             "name"=> $c->getName());
        //     $update = $this->db->create_new_row($this->table_name, $column, $values, $exicute);
        //     return $this->checkIsWasGood($update);
        //     }else{
        //         return $c->getName();
        //     }
        // }


        // Updates a line in directos table
        function ReturnSelect() {
            $List =  $this->db->SelectAllFromTable($this->table_name, $this->classneame);
            $manuSelect="<option value='Select a manufacturer'>Select a manufacturer</option>";
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



        // // Checks if a id exists
        //  function getDirecotrById($param){
        //     $c = new DirectorModel($param);
        //         if($c->getId() != 'null' || $c->getId() != 'NaN'){
        //         $check =  $this->db->Check_if_id_exists($this->table_name, $c->getId());
        //         return $this->checkIsWasGood($check);
        //         }else{
        //             return $c->getId();
        //         }

        //     }




        // // Deletes a line from directors table
        // function DeleteDirecotrById($param) {
        //     $c = new DirectorModel($param);
        //         if($c->getId() != false){
        //         $deleted =  $this->db->DeleteRow($this->table_name, $c->getId());
        //         return $this->checkIsWasGood($deleted);
        //         }else{
        //             return "error";
        //         }

    
        // }



        // // Updates a line in directos table
        // function UpdateDirecotrById($param) {
        //     $c = new DirectorModel($param);
        //         if($c->getId() != false || $c->getId() != false){
        //             if($c->getName() != false) {
        //             $updateValues= "name =  '".$c->getName()."'";
        //             $update =  $this->db->update_table($this->table_name, $c->getId(), $updateValues);
        //             return $this->checkIsWasGood($update);
        //         }else{
        //             return "error";
        //         }
        //     }

        // }


        




}