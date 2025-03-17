<h1>Exercice 4</h1>

<p>
   A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien 
   hypertexte (dans un nouvel onglet) de la page Wikipédia de la capitale. Le tableau sera dans l'ordre 
   alphabétique de la capitale.
</p>

<p>
    Le tableau passé en argument sera le suivant: <br>
        $capitales =<br>
        ["France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome", "Espagne"=>"Madrid"];
</p>


<?php

$capitales = [
    "France" => "Paris",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Allemagne" => "Berlin"
];

$capitales["Espagne"] = "Madrid";

// $liens = [
//     "France" => "<a href='https://fr.wikipedia.org/wiki/Paris' target='_blank'>Paris</a>",
//     "USA" => "<a href='https://fr.wikipedia.org/wiki/Washington' target='_blank'>Washington</a>",
//     "Italie" => "<a href='https://fr.wikipedia.org/wiki/Rome' target='_blank'>Rome</a>",
//     "Allemagne" => "<a href='https://fr.wikipedia.org/wiki/Berlin' target='_blank'>Berlin</a>",
//     "Espagne" => "<a href='https://fr.wikipedia.org/wiki/Madrid' target='_blank'>Madrid</a>" ];



echo afficherTableHTML($capitales);

function afficherTableHTML($capitales) {
    ksort($capitales);
    $resultat = "<table border = 1>
                    <thead>
                        <tr>
                            <td> Pays </td>
                            <td> Capitale </td>
                            <td> Lien wiki </td>
                        </tr>
                        </thead>
                        <tbody>";
    foreach($capitales as $pays => $capitale) {
        $resultat .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>$capitale</td>
                        <td> <a href='https://fr.wikipedia.org/wiki/$pays' target='_blank'>Lien</a>";

    } 
    $resultat .= "</tbody></table>";

    return $resultat; 
}