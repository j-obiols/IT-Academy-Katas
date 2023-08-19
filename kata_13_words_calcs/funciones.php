<?php
    
    //This is the develop branch
    
    function analisisTexto($texto){

        if(is_string($texto)){ 
  
            //Eliminamos puntos, comas, puntos y comas, acentos, etc y substituimos los puntos suspensivos por puntos:
           
            $cambios = array("," => "", ";" => "",  "-"=>"", "..."=>".", ":"=>"", "¨"=>"", "'"=>" ","("=>"", ")"=>"", "["=>"", "]"=>"","!"=>"", "?"=>"","¿"=>"", "ñ"=>"n", "á"=> "a", "é"=> "e", "è"=> "e", "í"=> "i", "ï"=> "i", "ó"=> "o", "ò"=> "o","ú"=> "u", "ü"=> "u",
            "Ñ"=>"N", "Á"=> "A", "É"=> "E", "È"=> "E", "Í"=> "I", "Ï"=> "I", "Ó"=> "O", "Ò"=> "O","Ú"=> "U", "Ü"=> "U");
            
            $textoMod = strtr($texto, $cambios);

            //Contamos puntos para identificar oraciones:

            $numeroDeOraciones = substr_count($textoMod, ".");

            //Si es un texto pero no hay ningún punto, consideraremos que contiene una oración:

            if($numeroDeOraciones == 0){
                $numeroDeOraciones = 1; 
            }

            $arrayPalabras = str_word_count($textoMod,1);

            $numeroDePalabras = count($arrayPalabras);
            
            if ($numeroDePalabras >= 1){

                $maximaLongitud = strlen($arrayPalabras[0]);

                $suma = 0;

                foreach($arrayPalabras as $key=>$palabra) {
                
                    $suma = $suma + strlen($palabra);

                    if(strlen($palabra) >=  $maximaLongitud) {
                        $maximaLongitud = strlen($arrayPalabras[$key]);
                        $palabraMasLarga = $arrayPalabras[$key];
                    } 
                    
                }

                $longitudMediana = intval($suma / $numeroDePalabras);

            } else {

                return "No se ha encontrado ninguna palabra propiamente dicha.";

            }

            return "Este texto contiene ". $numeroDePalabras. " palabras.
            La longitud media de las palabras es de ".$longitudMediana. " caracteres.
            Probablemente contiene ".$numeroDeOraciones." oración/es.
            La/s palabras más larga/s son de ".$maximaLongitud." caracteres, por ejemplo, omitiendo acentos o diéresis si los hubiera: ".$palabraMasLarga.".";
        
        } else {
            return "No es un texto.";
        } 
    }
?>
