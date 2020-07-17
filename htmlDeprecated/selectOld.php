<?php

$elenco_province = [];

$elenco_province['piemonte'] =
    [
        'TO' => 'Torino',
        'VC' => 'Vercelli',
        'NO' => 'Novara',
        'CN' => 'Cuneo',
        'AT' => 'Asti',
        'AL' => 'Alessandria',
        'BI' => 'Biella',
        'VB' => 'Verbano-Cusio-Ossola'
    ];

$elenco_province['valle_d_aosta'] =
    [
        'AO' => 'Valle d\'Aosta'
    ];
$elenco_province['lombardia'] =
    [
        'VA' => 'Varese',
        'CO' => 'Como',
        'SO' => 'Sondrio',
        'MI' => 'Milano',
        'BG' => 'Bergamo',
        'BS' => 'Brescia',
        'PV' => 'Pavia',
        'CR' => 'Cremona',
        'MN' => 'Mantova',
        'LC' => 'Lecco',
        'LO' => 'Lodi',
        'MB' => 'Monza e della Brianza'
    ];
$elenco_province['trentino_alto_adige'] =
    [
        'BZ' => 'Bolzano/Bozen',
        'TN' => 'Trento'
    ];
$elenco_province['veneto'] =
    [
        'VR' => 'Verona',
        'VI' => 'Vicenza',
        'BL' => 'Belluno',
        'TV' => 'Treviso',
        'VE' => 'Venezia',
        'PD' => 'Padova',
        'RO' => 'Rovigo'
    ];
$elenco_province['friuli_venezia_giulia'] =
    [
        'UD' => 'Udine',
        'GO' => 'Gorizia',
        'TS' => 'Trieste',
        'PN' => 'Pordenone'
    ];
$elenco_province['liguria'] =
    [
        'IM' => 'Imperia',
        'SV' => 'Savona',
        'GE' => 'Genova',
        'SP' => 'La Spezia'
    ];
$elenco_province['emilia_romagna'] =
    [
        'PC' => 'Piacenza',
        'PR' => 'Parma',
        'RE' => 'Reggio nell\'Emilia',
        'MO' => 'Modena', 'BO' => 'Bologna',
        'FE' => 'Ferrara', 'RA' => 'Ravenna',
        'FC' => 'toscana-Cesena',
        'RN' => 'Rimini'
    ];
$elenco_province['toscana'] =
    [
        'MS' => 'Massa-Carrara',
        'LU' => 'Lucca',
        'PT' => 'Pistoia',
        'FI' => 'Firenze',
        'LI' => 'Livorno',
        'PI' => 'Pisa',
        'AR' => 'Arezzo',
        'SI' => 'Siena',
        'GR' => 'Grosseto',
        'PO' => 'Prato'
    ];
$elenco_province['umbria'] =
    [
        'PG' => 'Perugia',
        'TR' => 'Terni'
    ];
$elenco_province['marche'] =
    [
        'PU' => 'Pesaro e Urbino',
        'AN' => 'Ancona',
        'MC' => 'Macerata',
        'AP' => 'Ascoli Piceno',
        'FM' => 'Fermo'
    ];
$elenco_province['lazio'] =
    [
        'VT' => 'Viterbo',
        'RI' => 'Rieti',
        'RM' => 'Roma',
        'LT' => 'Latina',
        'FR' => 'Frosinone'
    ];
$elenco_province['abruzzo'] =
    [
        'AQ' => 'L\'Aquila',
        'TE' => 'Teramo',
        'PE' => 'Pescara',
        'CH' => 'Chieti'
    ];
$elenco_province['molise'] =
    [
        'CB' => 'Campobasso',
        'IS' => 'Isernia'
    ];
$elenco_province['campania'] =
    [
        'CE' => 'Caserta',
        'BN' => 'Benevento',
        'NA' => 'Napoli',
        'AV' => 'Avellino',
        'SA' => 'Salerno'
    ];
$elenco_province['puglia'] =
    [
        'FG' => 'Foggia',
        'BA' => 'Bari',
        'TA' => 'Taranto',
        'BR' => 'Brindisi',
        'LE' => 'Lecce',
        'BT' => 'Barletta-Andria-Trani'
    ];
$elenco_province['basilicata'] =
    [
        'PZ' => 'Potenza',
        'MT' => 'Matera'
    ];
$elenco_province['calabria'] =
    [
        'CS' => 'Cosenza',
        'CZ' => 'Catanzaro',
        'RC' => 'Reggio di Calabria',
        'KR' => 'Crotone',
        'VV' => 'Vibo Valentia'
    ];
$elenco_province['sicilia'] =
    [
        'TP' => 'Trapani',
        'PA' => 'Palermo',
        'ME' => 'Messina',
        'AG' => 'Agrigento',
        'CL' => 'Caltanissetta',
        'EN' => 'Enna',
        'CT' => 'Catania',
        'RG' => 'Ragusa',
        'SR' => 'Siracusa'
    ];
$elenco_province['sardegna'] =
    [
        'SS' => 'Sassari',
        'NU' => 'Nuoro',
        'CA' => 'Cagliari',
        'OR' => 'Oristano',
        'OT' => 'Olbia-Tempio',
        'OG' => 'Ogliastra',
        'VS' => 'Medio Campidano',
        'CI' => 'Carbonia-Iglesias'
    ];
echo json_encode($elenco_province[$_GET['root_category']]);
