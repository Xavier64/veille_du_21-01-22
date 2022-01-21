<?php

echo "Le nom du fichier est : " . $_FILES['fichier']['name'];
echo "<br>";
echo "La taille du fichier en octet est : ". $_FILES ['fichier']['size'];
echo "<br>";
echo "Le fichier est bien téléchargé donc le chiffre erreur est bien : " . $_FILES['fichier']['error'];


var_dump($_FILES);


?>
<!-- Autre Exemple -->
<?php
// $nomFichier = "README.md"; 
// $fichier = file($nomFichier);  // la fonction file() fait tout le travail, elle retourne chaque ligne d'un fichier à des indices différents d'un tableau array.
 
// print "<pre>";
// print_r($fichier); print "</pre>"; // Affichage du tableau Array dans sa structure.
 
// foreach($fichier as $ligne) // Parcours du tableau Array pour un affichage plus conventionnel.
// {
//     echo $ligne."<br>";
// }
 
// echo ''; -->
