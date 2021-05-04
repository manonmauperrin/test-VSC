<?php

//créer toutes ses formes
$rect = new Rectangle();
$rect -> setSize(150,50);
$rect -> setColor('orange');
$rect -> setLocation(50,75);

$circle = new Circle();
$circle -> setColor('red');


//lancer le moteur
$moteur = new Moteur();

//comment on passe un nombre non déterminé d'arguments
$moteur -> addFormes($rect, $circle);

//transformation en SVG
$moteur -> run();

