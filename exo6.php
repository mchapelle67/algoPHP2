<h1>Exercice 6</h1>

<p>
    Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.
</p>

<!-- <form method="get" action="">
    <select name="civilité" id="civilité">
        <option value="monsieur">Monsieur</option> 
        <option value="madame">Madame</option> 
        <option value="mademoiselle">Mademoiselle</option>   
    </select>
</form> -->

<?php

$civilites = ["monsieur", "madame", "mademoiselle"];

function alimenterListeDeroulante($civilites) {
    $resultat = "<form method='get' action=''>
                    <select name='civilite' id='civilite'>";
        foreach($civilites as $civilite) {
            $civilite= ucwords($civilite);
                $resultat .= "<option value='$civilite'>$civilite</option>";
        }   
            $resultat .= "</select> </form>";

        return $resultat;
}

echo alimenterListeDeroulante($civilites);