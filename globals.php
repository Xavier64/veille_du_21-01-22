<?php

// -------------$GLOBALS-------------

// Exemple 1 Les superglobales sont disponibles dans l'espace global et local

$prenom = "Tata";
$nom = "Toto";
$age = 47;

// --------------------1 Espace global

// echo $GLOBALS["nom"];
// echo "<br>";
// echo $GLOBALS["prenom"];
// echo "<br>";
// echo $GLOBALS["age"];
// echo "<br>";

// var_dump($GLOBALS);


// ---------------2 Espace local (dans une fonction)

// function maFonction()
// {
//      echo "Je m'appel ". $GLOBALS["prenom"]. ", j'ai ".$GLOBALS["age"] . "ans". " et mon nom de famille est ". $GLOBALS["nom"];
// }

// maFonction();

// var_dump($GLOBALS);

//-------------- 3 Exemple avec des entiers


// $x = 75;
// $y = 25;
 
// function addition() {
//   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
 
// addition();
// echo "Le résultat de l' addition est : " . $z;




// -------------$_SERVER---------------------


// var_dump( $_SERVER);



?>

