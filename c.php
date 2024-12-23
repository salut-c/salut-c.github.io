<?php 

if(isset($_POST['nom']) && isset($_POST['mdp'])){

    session_start();
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];
    $nom_server = "localhost";
    $utilisateur ="root";
    $mot_de_passe = "";
    $nom_base_données = "personnes";
    $con = mysqli_connect($nom_server, $utilisateur, $mot_de_passe, $nom_base_données);
    $req = mysqli_query($con, "SELECT * FROM utilisateurs WHERE id= '$nom' AND mdp='$mdp'");
    $num_lignes = mysqli_num_rows($req);
    if($num_lignes > 0){
        header("Location:d.php");
        $_SESSION['nom'] = $nom;
    }else{
        echo "id ou mot de passe faux";
    }

}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coucou</title>
</head>
<body>
    <p>Salut</p>
</body>
</html> -->