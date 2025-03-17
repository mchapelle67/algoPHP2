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

<form method="get" action="">
    <label for="nom">Nom</label> : <input type="text" id="nom" name="nom">
    <label for="prénom">Prénom</label> : <input type="text" id="prénom" name="prénom">
    <label for="ville">Ville</label> : <input type="text" id="ville" name="ville">
</form>

<?php

$nomInput = ["Nom", "Prénom", "Ville"];
    afficherInput($nomsInput);
