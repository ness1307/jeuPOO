<?php

//L'auto-chargement des classes en pratique

spl_autoload_register(function($class) {
    include 'classes/' .$class . '.php';
});



// include './classes/Character.php';
// include './classes/Mage.php';

$leo = new Mage('Leo');
$luis = new Warrior('Luis');
$filou = new Warrior('Filou');
//var_dump($fighter1, $fighter2);

// $leo->attack($luis);
// echo "<br>";
// $luis->attack($leo);

// Characters attacking while both alive
while ($leo->isAlive() && $luis->isAlive()) {
    echo $leo->attack($luis);
    
    // First Character attacking the 2nd
    if (!$luis->isAlive()) {
        echo '<br>';
        echo "$luis->pseudo est KO!";
    };
    echo '<br>';

    // Second Character attaking the first
    echo $luis->attack($leo);
    if (!$leo->isAlive()) {
        echo '<br>';
        echo "$leo->pseudo est KO!";
    };
    echo '<br>';
}



