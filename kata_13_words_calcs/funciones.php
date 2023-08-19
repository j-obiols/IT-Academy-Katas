<?php
    
    function prepararTexto(string $texto):string {
  
        //Esta función elimina puntos, comas, puntos y comas, acentos, etc y substituye los puntos suspensivos por puntos:
           
            $cambios = array("," => "", ";" => "",  "-"=>"", "..."=>".", ":"=>"", "¨"=>"", "'"=>" ","("=>"", ")"=>"", "["=>"", "]"=>"","!"=>"", "?"=>"","¿"=>"", "ñ"=>"n", "á"=> "a", "é"=> "e", "è"=> "e", "í"=> "i", "ï"=> "i", "ó"=> "o", "ò"=> "o","ú"=> "u", "ü"=> "u",
            "Ñ"=>"N", "Á"=> "A", "É"=> "E", "È"=> "E", "Í"=> "I", "Ï"=> "I", "Ó"=> "O", "Ò"=> "O","Ú"=> "U", "Ü"=> "U");
            
            $textoSimplificado = strtr($texto, $cambios);

        return $textoSimplificado;

    }


    function analisisTexto(string $texto):string {

        if(is_string($texto)){ 

            $textoSimplificado = prepararTexto($texto);

            $numeroDeOraciones = substr_count($textoSimplificado, ".");

            if($numeroDeOraciones == 0){

                $numeroDeOraciones = 1; 

            }

            $arrayPalabras = str_word_count($textoSimplificado,1);

            $numeroDePalabras = count($arrayPalabras);
            
            if ($numeroDePalabras >= 1){

                $maximaLongitud = strlen($arrayPalabras[0]);

                $sumaCaracteres = 0;

                foreach($arrayPalabras as $key=>$palabra) {
                
                    $sumaCaracteres = $sumaCaracteres + strlen($palabra);

                    if(strlen($palabra) >=  $maximaLongitud) {

                        $maximaLongitud = strlen($palabra);
                        $palabraMasLarga = $palabra;

                    } 
                    
                }

                $longitudMediana = intval($sumaCaracteres / $numeroDePalabras);

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
