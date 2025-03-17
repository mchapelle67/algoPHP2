<h1>Exercice 1</h1>

<p>
    Créer une fonction personnalisée "convertirMajRouge($texte)" permettant de transformer une chaîne de caractère
    passée en argument en majuscule et rouge.
</p>

<h2> si $texte = "MON TEXTE EN PARAMETRE" </h2>

<style>
    .red {
        color: red;
    }

</style>

<?php 


$texte = "mon texte en parametre";

function convertirMajRouge($texte) {
    $resultat = mb_strtoupper($texte);
    $resultat = "<p class='red'>$resultat</p>";
    return $resultat;
}

echo convertirMajRouge($texte);