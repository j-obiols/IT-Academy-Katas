<?php


    include('functions.php');

    
    for($i=0;$i<=5;$i++){
       
        $userLength=readline("Introduce your password's length (equal or greater than 2):");
        
        if(validate_input($userLength)){

            echo generatePassword($userLength)."\n";

        }else {
            echo "Invalid value.\n";
        }

    }

    

?>