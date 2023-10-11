<?php  
    $nameOfServer = "localhost";
    $login        = "fivett207";
    $pswd         = "VP113"    ;
    $nameOfDB     = "rpg-297"  ;

    $connexion    = new mysqli($nameOfServer,$login,$pswd);

    if($connexion -> connect_error){
        die("Erreur : " .$connexion -> connect_error);
    
    }
    echo "connection error";

?>