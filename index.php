<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superglobales</title>
</head>

<body>
    <!-- --------Formulaire pour la méthode $_GET -->
    <h2>Formulaire pour la superglobale $_GET</h2>
    <form action="./php/get.php" method="get">
        <p>Nom</p> <input type="text" name="nom"><br>
        <p>E-mail:</p> <input type="text" name="email"><br>
        <br>
        <input type="submit">
    </form>

    <!-- ------------Formulaire pour la méthode $_POST -->
    <h2>Formulaire pour la superglobales POST</h2>
    <form action="./php/post.php" method="post">
        <p>Nom:</p> <input type="text" name="nom"><br>
        <p>Prénom:</p> <input type="text" name="prenom"><br>
        <br>
        <input type="submit">
    </form>


    <!-- -------Formulaire pour  $_FILES -->
    
    <!-- Debut du formulaire --> 
     <h2>Formulaire de téléchargement avec une méthode post pour la superglobale $_FILES</h2> 
    <form enctype="multipart/form-data" action="./php/file.php" method="post">
        <div>
                <label>Envoyer le fichier :</label>
                <input name="fichier" type="file" />
                <input type="submit" name="soumettre" value="Telecharger" />
        </div>
    </form>
    <!-- Fin du formulaire -->

    
</body>

</html>
