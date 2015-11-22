<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeconnexion';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeConnexion': {
            include("vues/v_connexion.php");
            break;
        }
    case 'valideConnexion': {
            $login = $_REQUEST['login'];
            $mdp = $_REQUEST['mdp'];
            $visiteur = $pdo->getInfosVisiteur($login, $mdp);
            if (!is_array($visiteur)) {
                ajouterErreur("Login ou mot de passe incorrect");
                include("vues/v_erreurs.php");
                include("vues/v_connexion.php");
            } else {
                $id = $visiteur['id'];
                $nom = $visiteur['nom'];
                $prenom = $visiteur['prenom'];
                connecter($id, $nom, $prenom);
                // fix header redirection
                echo '<script>window.location.replace("index.php");</script>';
                // error the header must be the first before the html
                //header('location: index.php');
            }
            break;
        }
    default : {
            include("vues/v_connexion.php");
            break;
        }
}
?>