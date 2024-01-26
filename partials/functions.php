<?php  
    //funzione che genera password casuale
    function generatePassword($leng){
        $string1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $number = '1234567890';
        $simbol = '!@-_?}{>]<[';
        $password = '';
        for ($i=0; $i < $leng; $i++) { 
            if ($i <= 4) {
                $num = $i;
            }else{
                $num = rand(0,3);
            }
            switch ($num) {
                case 0:
                    $password .= $string1[rand(0, strlen($string1) - 1 )];
                    break;
                case 1:
                    $password .= $number[rand(0, strlen($number) - 1)];
                    break;
                case 2:
                    $password .= strtolower($string1[rand(0, strlen($string1) - 1)]);
                    break;
                
                case 3:
                    $password .= $simbol[rand(0, strlen($simbol) - 1)];
                    break;
                    
                default:
                    $password .= strtolower($string1[rand(1, strlen($string1) - 1)]);
                    break;
            }
        }
        return str_shuffle($password) ;
    }

    //funzione che genera la password in base ai parametri che vengono selezionati;
    function generateUniquePassword($num, $char, $sym, $leng){
        $list = [];
        if (isset($num)) {
            $number = '1234567890';
            array_push($list, $number);
        }
        if (isset($char)) {
            $string1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $string1 .= strtolower($string1);
            array_push($list, $string1);
        }
        if (isset($sym)) {
            $simbol = '!@-_?}{>]<[';
            array_push($list, $simbol);
        }
        
    }
?>