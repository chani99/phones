<?php  
    class Controller {

//  function that chaeks if the sql returnd a true or false resulte
 function checkIsWasGood($update) {
    $isOK = ($update == true ? true : false);
    return $isOK;

}
        
    }