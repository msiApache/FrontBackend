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
<form name="modulo" id="idModulo" method="post" action="index.php">
    Scegli la regione:
    <select name="root_category" id="root_category" onChange="riempiSelect();">
        <option value="#">Selezionare</option>
        <option value="piemonte">Piemonte</option>
        <option value="valle_d_aosta">Valle d'Aosta</option>
        <option value="lombardia">Lombardia</option>
        <option value="trentino_alto_adige">Trentino-Alto Adige</option>
        <option value="veneto">Veneto</option>
        <option value="friuli_venezia_giulia">Friuli-Venezia Giulia</option>
        <option value="liguria">Liguria</option>
        <option value="emilia_romagna">Emilia-Romagna</option>
        <option value="toscana">Toscana</option>
        <option value="umbria">Umbria</option>
        <option value="marche">Marche</option>
        <option value="lazio">Lazio</option>
        <option value="abruzzo">Abruzzo</option>
        <option value="molise">Molise</option>
        <option value="campania">Campania</option>
        <option value="puglia">Puglia</option>
        <option value="basilicata">Basilicata</option>
        <option value="calabria">Calabria</option>
        <option value="sicilia">Sicilia</option>
        <option value="sardegna">Sardegna</option>
    </select>
    <br/> <br/>
    Qui appariranno le province:<select name="sub_category" id="sub_category"></select>
</form>
</body>
</html>
