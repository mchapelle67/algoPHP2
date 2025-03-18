<h1>Exercice 8</h1>

<p>
    Soit l'URL suivante: https://my.mobirise.com/data/userpic/764.jpg<br>
    Créer une fonction personnalisée permettant permettant d'afficher l'image N fois à l'écran. 
</p>

<?php

$image = "<img src='https://my.mobirise.com/data/userpic/764.jpg'></a>";

echo repeterImage($image, 4);

function repeterImage($image, $nb) {
$i = 1;
    while($i <= $nb) {
        echo $image;
        $i++;
    }
}


