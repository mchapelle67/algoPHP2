<h1>Exercice 11</h1>

<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaîne
    de caractère représentant une date.
</p>

<?php

function convertirDate($date) {
    $datetime = new DateTime($date);
        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, lDateFormatter::NONE);
    
    return $formatter->format($datetime);
}

echo convertirDate(2025-03-18);