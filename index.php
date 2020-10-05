<?php

require_once 'magazzino/Eventi.php';
require_once 'magazzino/Hospitality.php';

$juveBarca = new Events('Juventus vs Barcellona', '20/march/2020');
$juveBarca->eventPrice = 100;
$juveBarca->eventLocation = 'Torino';
echo "Il prezzo totale dell'evento " .$juveBarca->eventName ."comprensivo delle commissioni è € ".$juveBarca->getPrice(32);
$juveBarcaHosp = new Hospitality('Juventus vs Barcellona', '20/march/2020', 200);
echo " <br> Mentre il prezzo nell'Area Hospitality è € ".$juveBarcaHosp->newPrice($juveBarca->getPrice(32));
var_dump($juveBarca);



$napoliReal = new Events('Napoli vs Real Madrid', '21/march/2020');
$napoliReal->eventPrice = 90;
$napoliReal->eventLocation = 'Napoli';
echo "<br> Il prezzo totale dell'evento " .$napoliReal->eventName ." comprensivo delle commissioni è € ".$napoliReal->getPrice(32);
$napoliRealHosp = new Hospitality('Napoli vs Real Madrid', '21/march/2020', 55);
echo "<br> Mentre il prezzo nell'Area Hospitality è € ".$napoliRealHosp->newPrice($napoliReal->getPrice(20));
var_dump($napoliReal);


$interLiver = new Events('Inter vs Liverpool', '21/march/2020');
$interLiver->eventPrice = 87;
$interLiver->eventLocation = 'Milano';
echo "Il prezzo totale dell'evento " .$interLiver->eventName ." comprensivo delle commissioni è € ".$interLiver->getPrice(32);
$interLiverHosp = new Hospitality ('Inter vs Liverpool', '22/march/2020', 130);
echo "<br> Mentre il prezzo nell'Area Hospitality è € ".$interLiverHosp->newPrice($interLiver->getPrice(75));
var_dump($interLiver);
