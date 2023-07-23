<?php

    function validate_input($number) {

        if(is_numeric($number) && filter_var($number, FILTER_VALIDATE_INT)) {
            
            if($number>=0){

                return true;
            
            }else{

                return false;
            }
        
        }else{

            return false;

        }
    }

    function sum_digits($number) {
        
        $numbers=str_split($number);

        $sum=array_sum($numbers);
     
        for($i=0; $i<=(count($numbers)-1); $i++){

            if($i<(count($numbers)-1)) {

               echo $numbers[$i]." + ";

            }else{

                echo $numbers[$i]; 

            }

        } 
         
        echo " = ". $sum."\n";
       
    }

?>