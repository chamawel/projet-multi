<?php

    $nameOfServer = "localhost";
    $login        = "fivett207";    
    $pswd         = "VP113"    ;
    $nameOfDB     = "rpg-5tt297"  ;


    $conn = new mysqli($nameOfServer,$login,$pswd,$nameOfDB);

    $sql  = "select idpersonage,nom,level from personnages";

    $res  = $conn->query($sql);

    while($tab = $res ->fetch_assoc){
        echo implode("|",$tab );
        echo "<br />";
    }


>