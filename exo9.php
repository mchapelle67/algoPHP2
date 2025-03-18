<h1>Exercice 9</h1>

<p>
    Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de valeurs en paramètre.
</p>

<!-- <style>
    form {
        display: flex;
        flex-direction: column;
    }
</style> -->

<?php 

$sexes = ["Masculin", "Feminin", "Autre"];

function afficherRadio($sexes){
    $resultat = "<form method='get' action=''>";
        foreach ($sexes as $sexe ){
            $resultat .= "<input type='radio' name='sexe' value='$sexe' id='$sexe'>
                            <label for='$sexe'>$sexe</label><br>";
            }
        $resultat .= "</form>";
            return $resultat;
    }

echo afficherRadio($sexes);