<?php
 define ('playerl1' , 'bobyy');
 define ('playerl' , 'bybbo');

$player1Life = 100;
$player2Life = 100;

echo "/////////////////////////////////////". "\n";
echo "C\'est l\'heure du dueeeeeeeeel";
echo "/////////////////////////////////////";
echo " ";

//while($player1Life > 0 || $player2Life > 0) 
{
$puissanceAttaque1 = rand(0,50);
$puissanceAttaque2 = rand(0,50);
echo $player1 . 'attaque le joure ' . $player2;
echo $player1 . $player1Life  .' - ' . $player2 . $player2Life ;
echo 'Bobby attaque et enlève'. $puissanceAttaque1 .' '. 'points de vie';
$player2Life = $player2Life - $puissanceAttaque1;
echo 'Bybbo attaque et enlève'. $puissanceAttaque2 .'points de vie';
$player1Life = $player1Life - $puissanceAttaque2;
}

echo"/////////////////////////////////////";
echo $player1Life > 0 ? player1 . 'est vainqueur' : player2 .'est vainqueur';


if ($player1Life > 0 ){
    echo 'Bobby attaque et enlève'. $puissanceAttaque2 .' '. 'points';
    $player1Life = $player1Life - $puissanceAttaque2;
    echo"/////////////////////////////////////";
    echo ($player1Life > 0 ? player1. 'est vainqueur' :player2. 'est vainqueur');

    echo "c'est un peu comme si c'est toi le joueur 1, alors bravo (meme si tu n'as rien fait)..."; 
}