<?php

    class Validation { 


        public function NotNull($value) {
            if($value == '')
            {
                return false;
            }
            return true;
        }

        public function isNumber($value) {
            if(!ctype_digit($value))
            {
                return false;
            }
            return true;
        }

        
        public function optionSelected($option) {
            if($option == '0')
            {
                return false;
            }
            return true;
        }
    }

