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
    case  'fetchAllRegioni':
        $entiLocaliMapper->fetchAllRegioni();
        break;
    case 'findProByReg':
        $entiLocaliMapper->findProvByReg();
        break;
    case  'findComByPro':
        $entiLocaliMapper->findComByPro();
        break;
    default :
        echo '';
}

echo '<h2 style="text-align: center; padding-bottom: 20px">Backfrontend</h2>';

?>
<html>
<head>
    <title>Enti Locali</title>
    <script src="/JS/jquery-3.5.1.js"></script>
    <script src="/JS/select.js"></script>
</head>
<body>
<h1>Autonomie Locali</h1>
<form method="post" action="index.php">
    <fieldset>
        <legend>Luogo di Nascita</legend>
        <label for="regione">Regione:</label> <span id="errregione"></span>

        <select name="regione" id="regione">
            <option value="">-- scegli una regione</option>
            <?php
            $entiLocaliMapper->fetchAllRegioni();
            ?>
        </select>

        <br>

        <label for="provincia">Provincia:</label> <span id="errprovincia"></span>
        <select name="provincia" id="provincia">
            <option value="">-- scegli una provincia</option>
        </select>

        <br>

        <label for="comune">Comune:</label> <span id="errcomune"></span>
        <select name="comune" id="comune">
            <option value="">-- scegli un comune</option>
        </select>
    </fieldset>
</form>









