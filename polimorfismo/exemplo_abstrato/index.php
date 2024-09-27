<?php

require_once('./Boi.php');
require_once('./Gato.php');


$animal = new Boi();
$animal->fazBarulho();


$gato = new Gato();
$gato->fazBarulho();
