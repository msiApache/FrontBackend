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

$entiLocaliMapper->findComByPro();