<?php 

include __DIR__ . '/classes/Cibo.php';
include __DIR__ . '/classes/Gioco.php';
include __DIR__ . '/classes/Utente.php';
include __DIR__ . '/classes/UtenteRegistrato.php';

$cibo = new Cibo('Almo Nauture', '5,99€', 'Almo', '1', 'Gatto', 'Pesce');
var_dump($cibo);

$gioco = new Gioco('Topo in tessuto', '4,99€', 'Imac', '2', 'Gatto', 'Tessuto');
var_dump($gioco);

$utente = new Utente('Luca', 'Rossi', 'Via Roma 5', '321321321', '5434123341', '01/01/2020');
var_dump($utente);

$utenteRegistrato = new UtenteRegistrato('Luca', 'Rossi', 'Via Roma 5', '321321321', '5434123341', '01/01/2034');
var_dump($utenteRegistrato);