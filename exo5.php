<h1>Exercice 5</h1>

<p>
   Créer une fonction personnalisée permettant de créer un formaulaire de chanmps de teste en précisant le nom
   des champs associés.
</p>

<p>
    Exemple:<br>
    $nomInput = ["Nom", "Prénom", "Ville"];<br>
    afficherInput($nomsInput);
</p>

<style>
    label {
        display: flex;
        flex-direction: column;
    }
</style>


<?php

$nomInput = ["Nom", "Prénom", "Ville"];
    
function afficherInput($nomInput){
    $resultat = "<form method='get' action=''>";
         foreach ($nomInput as $infos) {
            $resultat .= "<label for='$infos'>$infos: </label>  
                            <input type='text'' id=$infos: name='$infos'>";         
            }
        $resultat .= "</form>";   
            return $resultat;
}

echo afficherInput($nomInput);
