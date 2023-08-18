### kata-0

## Generate password 

(https://github.com/jclumbiarres/kata) 

**A password generator in php**.

The user must indicate the length of the password, and the program will generate and display the corresponding password on the screen. 
It includes a **validate_input** function. 

The password can contain: lowercase letters, uppercase letters, numbers and these symbols: ('!','@','#','$','%','^','&','*','(' ,')','{','}','[',']','=','<','>')

Once the length of the password **$length** is set by the user, the program will iterate **$length** times over an array of available characters, to get and set every character of the password.  

In every iteration the program will execute **shuffle_array** and **random_int**.   

**shuffle_array** will provide a permutation of the initially given array, so the character corresponding to every key will be different in every iteration.  

**random_int** will provide a cryptographically secure, uniformly selected integer, limited by the array's size,  
which will be the key to get every new character and add it to the new password.   

To execute in Visual Studio Code, typing in terminal:  
```
php main.php
```

