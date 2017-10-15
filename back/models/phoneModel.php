<?php
    require_once 'model.php';
    require_once '../common/validation.php';
    
    
    class phoneModel extends Model implements JsonSerializable {
        private $id;
        private $name;
        private $image;
        private $manu_name;
        private $validation;


        function __construct($params) {
            $this->validation = new validation;
            $this->tableName ='phones';
            if (array_key_exists("id", $params)) $this->id = $params["id"];  
            if (array_key_exists("name", $params)) $this->name = $params["name"];
            if (array_key_exists("image", $params)) $this->image = $params["image"];
            if (array_key_exists("manu_name", $params)) $this->manu_name = $params["manu_name"];
            

        
    }

        public function getName(){
            if ($this->validation->NotNull($this->name) == false){
            return 'null';}
            else{
            return $this->name;
            }
        }
    

        public function getId(){
            if ($this->validation->NotNull($this->id) == false) {
                return 'null';
            }
            elseif ($this->validation->isNumber($this->id) == false) {
                return 'NaN';
            }
            else {
            return $this->id;
            }
        }

            public function getImage(){
            if ($this->validation->NotNull($this->image) == false){
            return 'null';}
            else{
            return $this->image;
            }
        }
    

            
        public function getManuName(){
            if ($this->validation->NotNull($this->manu_name) == false){
            return 'null';}
            else{
            return $this->manu_name;
            }
        }
            


        public function jsonSerialize() {
            return [
                "Phone ID" => $this->id,
                "Phone Name" => $this->name,
                "Image Name" => $this->image,
                "Manufacturer Name" => $this->manu_name
            ];
        }
    }

?>
