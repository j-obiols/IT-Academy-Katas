<?php

    function validate_input($number) {

        if(is_numeric($number) && filter_var($number, FILTER_VALIDATE_INT)) {
            
            if($number>=2){

                return true;
            
            }else{

                return false;
            }
            
        }else{

            return false;
        }

    }

    function generatePassword($length) {

        $values=array_merge(array('!','@','#','$','%','^','&','*','(',')','{','}','[',']','=','<','>'), range('A', 'Z'), range(0,9), range('a', 'z'));

        $n=sizeof($values);
        
        $password='';
        
        for($i=0; $i<$length; $i++){
    
          $r = new \Random\Randomizer();
          $values=$r->shuffleArray($values);
          $index=random_int(0,($n-1));
          $password=$password.$values[$index];

        }

       return $password;

    }

?>
