<?php
require_once ('DAL.php');

class BL {
private $DB;

    function __construct() {
        $this->DB = new DAL();
        

    }

    
// selects all from a table in a DB and returns it as array
  function SelectAllFromTable($table_name, $classname) {
        $res = $this->DB->GetAllTable("SELECT * FROM `".$table_name."`", $classname);
        return $res;

    }

// checks if a id exists on a id row in a DB and returns true or false
 function Check_if_id_exists($table_name, $id) {
        $res =  $this->DB->CheckId("SELECT id FROM ".$table_name." WHERE id='$id'");
        $istrue = ($res > 0 ?  true : false);
        return $istrue;
    }


 // updates data in a table 
 function update_table($table_name, $id, $updateValues) {
        $update = $this->DB->updateSQL("UPDATE ".$table_name." SET ".$updateValues." WHERE id='$id'");
        return $update;

}


 function create_new_row($table_name, $column, $values, $exicute) {
        $query = "INSERT INTO ".$table_name."(".$column.") VALUES (".$values.")";
        $Create = $this->DB->insertSQL($query, $exicute);
        return $Create;


}

 function DeleteRow($table_name, $id) {
        $delete = $this->DB->deleteSQL("DELETE FROM ".$table_name." WHERE id =". $id);
        return $delete;

}


function innerJoin($selected_tables, $table1, $table2, $Column_equal_to) {
    $innerJion = $this->DB->innerJoion("SELECT ". $selected_tables." FROM ". $table1 ." INNER JOIN " .$table2." ON ". $Column_equal_to);
    return $innerJion;

}
}
    
