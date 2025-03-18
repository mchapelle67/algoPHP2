<h1>Exercice 14</h1>

<p>
    En utilisant les ressources de la page http://localhost/manon_CHAPELLE/algoPHP2/phpinfo().php, vérifier 
    si une adresse e-mail a le bon format.
</p>

<?php

$email = 'contact@elan';


if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    $resultat = "Cette adresse mail est valide."; 
} else {
    $resultat = "Cette adresse mail est invalide.";
}

echo $resultat;
