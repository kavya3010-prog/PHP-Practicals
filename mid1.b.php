<?php
$str="Hello@123 World!";
$upper=0;
$lower=0;
$digit=0;
$special=0;
for($i=0;$i<strlen($str);$i++)
    {
        $ch=$str[$i];
        if(ctype_upper($ch)){
            $upper++;
        }
        elseif(ctype_lower($ch)){
            $lower++;
        }
        elseif(ctype_digit($ch)){
            $digit++;
        }
        else{
            $special++;
        }
    }
    echo "String: $str <br>";
    echo "Uppercase letters: $upper <br>";
    echo "lowercase letters: $lower <br>";
    echo "Digits: $digit <br>";
    echo "Special characters: $special <br>";
    ?>

