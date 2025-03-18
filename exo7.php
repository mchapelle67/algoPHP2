<h1>Exercice 7</h1>

<p>
    Créer une fonction personnalisée de générer des cases à cocher. On pourra préciser dans le tableau associatif 
    si la case est cochée ou non. 
</p>

<style>
    form {
        display: flex;
        flex-direction: column;
    }
</style>

<?php

$checkbox = ["Choix 1", "Choix 2", "Choix 3"];

function genererCheckbox($checkbox) {
    $resultat = "<form method='get' action=''>";
        foreach ($checkbox as $choix) {
            $resultat .= "<div><input type='checkbox' name='$choix' id='$choix''>   
        <label for='$choix'>$choix</label></div>";
        }
    $resultat .= "</form>";
        return $resultat;
}

echo genererCheckbox($checkbox);