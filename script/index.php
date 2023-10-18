<?php  
    

    $nameOfServer = "localhost";
    $login        = "fivett207";    
    $pswd         = "VP113"    ;
    $nameOfDB     = "rpg-5tt297"  ;


    echo '<head> 
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title> | La page la + cool</title>

            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="../css/nav.css">
            <link rel="stylesheet" href="../css/animation.css" >
        
            <link rel="icon" type="image/x-icon" href="../favicon.ico">
          </head>
    ';

    if( $_POST["login"] == $login and $_POST["password"] == $pswd ){
        $id = mysqli_connect($nameOfServer,$login,$pswd,$nameOfDB) or die("Info de connexion invalide") ;

        $res= mysqli_query($id, "select idPersonnage , nom , level from personnages" );


        echo "<header> <h1> Bonjour <b style='text-decoration: underline;'> ".$_POST["login"]."</b> </h1> <br>"  ;
        echo mysqli_num_rows($res)." - Ligne dans la table : </header>" ;
        

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


    $id->close()
?>