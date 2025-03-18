<h1>Exercice 10</h1>

<p>
    En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui 
    contient les informations suivantes: champs de texte avec nom, prénom, adresse e-mail, ville, sexe, et 
    une liste de choix parmis lesquels on pourra sélectionner un intitulé de formation.
</p>

<p> Le formulaire devra égalemment comporter un bouton permettant de le soumettre à un traitement de validation.</p>

<!-- <form method="get" action="">
    <p>Formulaire de renseignement<p>
        <label for="nom">Nom: </label>
            <input type="text" name="nom" id="nom">
        <label for="prénom">Prénom: </label>
            <input type="text" name="prénom" id="prénom">
        <label for="email">E-mail:</label>
            <input type="email" name="email" id="email">
        <label for="ville">Ville: </label>
            <input type="text" name="ville" id="ville">
    
</form>
<form method="get" action="">
    <p>Sexe:</p> 
        <label for="sexe">Feminin</label>
            <input type="radio" name="sexe" value="Feminin" id="sexe">
        <label for="sexe">Masculin</label>
            <input type="radio" name="sexe" value="Masculin" id="sexe">
        <label for="sexe">Autre</label>
            <input type="radio" name="sexe" value="Autre" id="sexe">
</form>   
<form method="get" action="">
    <p>Choisissez les formations qui vous interesses:</p>   
        <label for="dev logiciel">Développeur logiciel</label>
            <input type="checkbox" name="dev logiciel" id="dev logiciel">
        <label for="designer web">Designer web</label>
            <input type="checkbox" name="designer web" id="designer web">
        <label for="integrateur">Intégrateur</label>
            <input type="checkbox" name="integrateur" id="integrateur">
        <label for="chef de projet">Chef de projet</label>
            <input type="checkbox" name="chef de projet" id="chef de projet">
</form> -->
<style>
    input {
        margin: 5px;
    }

    label div {
        display: flex;
        flex-direction: column;
    }


    form {
        padding: 20px;
        border: 1px solid black;
    }

</style>

<?php

$infos = ["Nom", "Prénom", "E-mail", "Ville"];
$sexes = ["Feminin", "Masculin", "Autre"];
$formations = ["Développeur logiciel", "Designer web", "Intégrateur", "Chef de projet"];

echo "Formulaire de renseignement: <br>";

function afficherTableau($infos, $sexes, $formations){
    $resultat = "<p><form method='get' action=''>";
        foreach($infos as $info){
            $resultat .= "<div> 
                                <label for='$info'>$info: </label>
                                <input type='text' name='$info' id='$info'>
                            </div>";
        }
            foreach($sexes as $sexe){
                $resultat .= "<label for='sexe'>$sexe</label>
                                    <input type='radio' name='sexe' value='$sexe' id='sexe'><br>";
            }
                foreach($formations as $formation){
                    $resultat .= "<label for='formations'>$formation</label>
                                        <input type='checkbox' name='$formation' id='$formation''><br>";
                }
    $resultat .= "</form></p>";
    return $resultat;
}

echo afficherTableau($infos, $sexes, $formations);
echo "<button type='submit'>Envoyer</button>";

// je veux créer espace entre les tableaux 