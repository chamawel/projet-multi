<?php  
    
    
    $nameOfServer = "localhost";
    $login        = "fivett207";    
    $pswd         = "VP113"    ;
    $nameOfDB     = "rpg-5tt297"  ;



    if( $_POST["login"] == $login and $_POST["password"] == $pswd ){
        $id = mysqli_connect($nameOfServer,$login,$pswd,$nameOfDB) or die("Erreur de Connexion") ;

        $res= mysqli_query($id, "select idPersonnage , nom , level from personnages" );

        echo mysqli_num_rows($res)." - Ligne dans la table :" ;
        echo "<hr />";

        echo " <p><b> ID | Nom | Level </b> </p>   ";

        while ($tab = mysqli_fetch_assoc($res)){
                echo implode(" | ",$tab);
                echo "<br />";
        }  

    }
    else{
        echo "Erreur De Connexion <br />";
        echo "<a href='../formulaire-test.html'> <button type='button'> Retour </button> <a/> ";
    }


    // $id = mysqli_connect($nameOfServer,$login,$pswd,$nameOfDB) or die("Erreur de Connexion") ;

    // $res= mysqli_query($id, "select idPersonnage , nom , level from personnages" );

    // echo mysqli_num_rows($res)." - Ligne dans la table :" ;
    // echo "<hr />";

    // echo " <p><b> ID | Nom | Level </b> </p>   ";

    // while ($tab = mysqli_fetch_assoc($res)){
    //         echo implode(" | ",$tab);
    //         echo "<br />";
    // }
    

?>