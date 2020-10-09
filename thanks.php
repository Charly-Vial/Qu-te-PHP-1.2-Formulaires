<?php


if ((empty($_POST["nom"])) || (empty($_POST["prenom"])) || (empty($_POST["sujet"])) || (empty($_POST["email"])) ||(empty($_POST["telephone"])) || (empty($_POST["message"]))) 
{
    echo "Un ou plusieurs champs sont manquants";
} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
{
    echo "Veuillez renseigner un email valide";
} else 
{
    echo "Merci {$_POST['nom']} {$_POST['prenom']} de nous avoir contacté à propos de “{$_POST['sujet']}”.

 Un de nos conseiller vous contactera soit à l’adresse {$_POST['email']} ou par téléphone au {$_POST['telephone']} dans les plus brefs délais pour traiter votre demande : 
 
 {$_POST['message']}";
}




 




