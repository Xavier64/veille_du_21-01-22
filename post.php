
 <?php
    
    echo "<div>";
    echo "Bonjour Mr ";
    echo $_POST["nom"];
    echo " votre prénom est bien " ; 
    echo $_POST["prenom"]; 
    echo "</div>";
    var_dump($_POST);
   //  print_r($_POST);
         
    ?>

    <!-- Les informations envoyées à partir d'un formulaire avec la méthode POST sont invisibles pour les autres . -->
    <!-- (tous les noms/valeurs sont intégrés dans le corps de la requête HTTP) et n'ont aucune limite sur la quantité d'informations à envoyer -->
