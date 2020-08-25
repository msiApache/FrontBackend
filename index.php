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

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enti Locali</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="/JS/jquery-3.5.1.js"></script>
    <script src="/JS/select.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <h3 style="text-align: center; padding-bottom: 25px">Autonomie Locali</h3>
            <form method="post" action="index.php">
                <div class="form-group">

                    <div class="form-group row">
                        <label for="regione" class="col-sm-2 col-form-label">Regione:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="regione" id="regione" style="max-width: max-content">
                                <option value="">-- scegli una regione</option>
                                <?php
                                $entiLocaliMapper->fetchAllRegioni();
                                ?>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="form-group row">
                        <label for="provincia" class="col-sm-2 col-form-label">Provincia:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="provincia" id="provincia" style="max-width: max-content">
                                <option value="">-- scegli una provincia</option>
                                <?php
                                $entiLocaliMapper->findProvByReg();
                                ?>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="form-group row">
                        <label for="comune" class="col-sm-2 col-form-label">Comune:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="comune" id="comune" style="max-width: max-content">
                                <option value="">-- scegli un comune</option>
                                <?php
                                $entiLocaliMapper->findComByPro();
                                ?>
                            </select>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>







