<h1>Exercice 2</h1>

<p>
    Soit le tableau suivant: <br>
        $capitales =<br>
        ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome"];
</p>

<p>
    Réaliser un simple algorithme permettant d'afficher le tableau HTML suivant
    (notez que le nom du pays s'affichera en majuscule et que le tableau est trié par ordre alphabétique) grâce 
    à une fonction personnalisée. 
</p>

<p> Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>

<!-- <table border = 1>
    <thead>
        <tr>
            <td> Pays </td>
            <td> Capitale </td>
        </tr>
    </thead>
    <tbody>
        <tr> 
            <td> France </td>
            <td> Paris </td>
        <tr>
            <td> USA
            <td> Washington </td>
        </tr>
        <tr>
            <td> Italie </td>
            <td> Rome </td> 
        </tr>
            <td> Allemagne </td>
            <td> Berlin </td>
    </tbody>
</table> --> 


<?php

$capitales = [
    "France" => "Paris",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Allemagne" => "Berlin"
];

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    ksort($capitales);
    $resultat = "<table border = 1>
                    <thead>
                        <tr>
                            <td> Pays </td>
                            <td> Capitale </td>
                        </tr>
                        </thead>
                        <tbody>";
    foreach($capitales as $pays => $capitale) {
        $resultat .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                    </tr>";
    }
    $resultat .= "</tbody></table>";

    return $resultat; 
}