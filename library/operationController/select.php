<?php

use mapper\EntiLocaliMapper;

// Senza la function spl_autoload_register() i file da includere sono: ConnDb.php e EntiLocaliMapper.php
spl_autoload_register(
    function ($className) {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        include __DIR__ . '/../../library/' . $className . '.php';
    }
);

$entiLocaliMapper = new EntiLocaliMapper();

$fieldReg = [
    1 => 'piemonte',
    2 => 'valle_d_aosta',
    3 => 'lombardia',
    4 => 'trentino_alto_adige',
    5 => 'veneto',
    6 => 'friuli_venezia_giulia',
    7 => 'liguria',
    8 => 'emilia_romagna',
    9 => 'toscana',
    10 => 'umbria',
    11 => 'marche',
    12 => 'lazio',
    13 => 'abruzzo',
    14 => 'molise',
    15 => 'campania',
    16 => 'puglia',
    17 => 'basilicata',
    18 => 'calabria',
    19 => 'sicilia',
    20 => 'sardegna',
];

//Chiamata findProvinciaByRegione, restituisce le province di interesse in base alla regione selezionata:
$findProvinciaBy1 = $entiLocaliMapper->findProvinciaByRegione(1);
$findProvinciaBy2 = $entiLocaliMapper->findProvinciaByRegione(2);
$findProvinciaBy3 = $entiLocaliMapper->findProvinciaByRegione(3);
$findProvinciaBy4 = $entiLocaliMapper->findProvinciaByRegione(4);
$findProvinciaBy5 = $entiLocaliMapper->findProvinciaByRegione(5);
$findProvinciaBy6 = $entiLocaliMapper->findProvinciaByRegione(6);
$findProvinciaBy7 = $entiLocaliMapper->findProvinciaByRegione(7);
$findProvinciaBy8 = $entiLocaliMapper->findProvinciaByRegione(8);
$findProvinciaBy9 = $entiLocaliMapper->findProvinciaByRegione(9);
$findProvinciaBy10 = $entiLocaliMapper->findProvinciaByRegione(10);
$findProvinciaBy11 = $entiLocaliMapper->findProvinciaByRegione(11);
$findProvinciaBy12 = $entiLocaliMapper->findProvinciaByRegione(12);
$findProvinciaBy13 = $entiLocaliMapper->findProvinciaByRegione(13);
$findProvinciaBy14 = $entiLocaliMapper->findProvinciaByRegione(14);
$findProvinciaBy15 = $entiLocaliMapper->findProvinciaByRegione(15);
$findProvinciaBy16 = $entiLocaliMapper->findProvinciaByRegione(16);
$findProvinciaBy17 = $entiLocaliMapper->findProvinciaByRegione(17);
$findProvinciaBy18 = $entiLocaliMapper->findProvinciaByRegione(18);
$findProvinciaBy19 = $entiLocaliMapper->findProvinciaByRegione(19);
$findProvinciaBy20 = $entiLocaliMapper->findProvinciaByRegione(20);

$elenco_province = [];

//associazione del risultato delle chiamate eseguite al db con i valore html delle option:
$elenco_province[$fieldReg[1]] = $findProvinciaBy1;
$elenco_province[$fieldReg[2]] = $findProvinciaBy2;
$elenco_province[$fieldReg[3]] = $findProvinciaBy3;
$elenco_province[$fieldReg[4]] = $findProvinciaBy4;
$elenco_province[$fieldReg[5]] = $findProvinciaBy5;
$elenco_province[$fieldReg[6]] = $findProvinciaBy6;
$elenco_province[$fieldReg[7]] = $findProvinciaBy7;
$elenco_province[$fieldReg[8]] = $findProvinciaBy8;
$elenco_province[$fieldReg[9]] = $findProvinciaBy9;
$elenco_province[$fieldReg[10]] = $findProvinciaBy10;
$elenco_province[$fieldReg[11]] = $findProvinciaBy11;
$elenco_province[$fieldReg[12]] = $findProvinciaBy12;
$elenco_province[$fieldReg[13]] = $findProvinciaBy13;
$elenco_province[$fieldReg[14]] = $findProvinciaBy14;
$elenco_province[$fieldReg[15]] = $findProvinciaBy15;
$elenco_province[$fieldReg[16]] = $findProvinciaBy16;
$elenco_province[$fieldReg[17]] = $findProvinciaBy17;
$elenco_province[$fieldReg[18]] = $findProvinciaBy18;
$elenco_province[$fieldReg[19]] = $findProvinciaBy19;
$elenco_province[$fieldReg[20]] = $findProvinciaBy20;

echo json_encode($elenco_province[$_GET['root_category']]);

$isShow = false;
if ($isShow) {
//Chiamata findComuneByRegioneProvincia, restituisce i comuni di interesse in base alla regione selezionata e alla provincia selezionata:
    $findComuneBy1 = $entiLocaliMapper->findComuneByRegioneProvincia(1,);
    $findComune2 = $entiLocaliMapper->findComuneByRegioneProvincia(2,);
    $findComune3 = $entiLocaliMapper->findComuneByRegioneProvincia(3,);
    $findComune4 = $entiLocaliMapper->findComuneByRegioneProvincia(4,);
    $findComune5 = $entiLocaliMapper->findComuneByRegioneProvincia(5,);
    $findComune6 = $entiLocaliMapper->findComuneByRegioneProvincia(6,);
    $findComune7 = $entiLocaliMapper->findComuneByRegioneProvincia(7,);
    $findComune8 = $entiLocaliMapper->findComuneByRegioneProvincia(8,);
    $findComune9 = $entiLocaliMapper->findComuneByRegioneProvincia(9,);
    $findComune10 = $entiLocaliMapper->findComuneByRegioneProvincia(10,);
    $findComune11 = $entiLocaliMapper->findComuneByRegioneProvincia(11,);
    $findComune12 = $entiLocaliMapper->findComuneByRegioneProvincia(12,);
    $findComune13 = $entiLocaliMapper->findComuneByRegioneProvincia(13,);
    $findComune14 = $entiLocaliMapper->findComuneByRegioneProvincia(14,);
    $findComune15 = $entiLocaliMapper->findComuneByRegioneProvincia(15,);
    $findComune16 = $entiLocaliMapper->findComuneByRegioneProvincia(16,);
    $findComune17 = $entiLocaliMapper->findComuneByRegioneProvincia(17,);
    $findComune18 = $entiLocaliMapper->findComuneByRegioneProvincia(18,);
    $findComune19 = $entiLocaliMapper->findComuneByRegioneProvincia(19,);
    $findComune20 = $entiLocaliMapper->findComuneByRegioneProvincia(20,);
}