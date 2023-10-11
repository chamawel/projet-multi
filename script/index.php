<?php  
    $nameOfServer = "localhost";
    $login        = "fivett207";
    $pswd         = "VP113"    ;
    $nameOfDB     = "rpg-297"  ;

    $connexion    = mysqli_connect($nameOfServer,$login,$pswd,$nameOfDB);
    $message      = mysqli_query($connexion,"SELECT 'nom' FROM 'personnages' ");
    $row          = mysqli_fetch_assoc($message);

    echo $row['_msg'];

    echo "BOO"
?>