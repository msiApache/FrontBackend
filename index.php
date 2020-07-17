<?php

use mapper\EntiLocaliMapper;

spl_autoload_register(
    function ($className) {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        include __DIR__ . '/library/' . $className . '.php';
    }
);

$entiLocaliMapper = new EntiLocaliMapper();

$type = '';

switch ($type) {
    case 'find' :
        echo json_encode($entiLocaliMapper->find(14));
        break;
    case 'fetchAll' :
        echo json_encode($entiLocaliMapper->fetchAll());
        break;
    case 'findProvinciaByRegione':
        echo json_encode($entiLocaliMapper->findProvinciaByRegione(14));
        break;
    case 'findComuneByRegioneProvincia':
        echo json_encode($entiLocaliMapper->findComuneByRegioneProvincia(14, 94));
        break;
    default :
        echo '';
}

echo '<h2 style="text-align: center; padding-bottom: 20px">Backfrontend</h2>';

?>
<html>
<head>
    <title>Test select</title>
    <script src="/JS/jquery-3.5.1.js"></script>
    <script src="/JS/select.js"></script>
</head>
<body>
<!--<form name="modulo" id="idModulo" method="post" action="index.php">
    Scegli la regione:
    <select name="root_category" id="root_category" onChange="riempiSelect();">
        <option value="#">Selezionare</option>
        <option value=""></option>
    </select>
    <br/> <br/>
    Qui appariranno le province:<select name="sub_category" id="sub_category"></select>
</form>-->
<h1>Registrati</h1>
<form method="post" action="index.php">
    <fieldset>
        <legend>Luogo di Nascita</legend>
        <label for="regione">Regione:</label> <span id="errregione"></span>

        <select name="regione" id="regione">
            <option value="">-- scegli una regione</option>
            <?php
            $entiLocaliMapper->fetchAllRegioni();
            $entiLocaliMapper->findProvByReg();
            ?>
        </select>

        <br>

        <label for="provincia">Provincia:</label> <span id="errprovincia"></span>
        <select name="provincia" id="provincia">
            <option value="">-- scegli una provincia</option>
        </select>
    </fieldset>
</form>
<br/> <br/>








