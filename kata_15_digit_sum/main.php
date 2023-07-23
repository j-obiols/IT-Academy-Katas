<?php
    
    include "functions.php";
     
    //Value input by terminal:

    $number1 = readline(" ");
    $number2 = readline(" ");
    $number3 = readline(" ");
    $number4 = readline(" ");


    //Output:
    
    if(validate_input($number1)) {

        sum_digits($number1);

    }

    if(validate_input($number2)) {

        sum_digits($number2);
        
    }

    if(validate_input($number3)) {

        sum_digits($number3);
        
    }

    if(validate_input($number4)) {

        sum_digits($number4);
        
    }
  

?>