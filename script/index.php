<?php  
    

    $nameOfServer = "localhost";
    $login        = "fivett207";    
    $pswd         = "VP113"    ;
    $nameOfDB     = "rpg-5tt297"  ;



    if( $_POST["login"] == $login and $_POST["password"] == $pswd ){
        $id = mysqli_connect($nameOfServer,$login,$pswd,$nameOfDB) or die("Info de connexion invalide") ;

        $res= mysqli_query($id, "select idPersonnage , nom , level from personnages" );


        echo " <h1> Bonjour <b style='text-decoration: underline;'> ".$_POST["login"]."</b> </h1> <br>"  ;
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

?>