<?php

namespace mapper;

use dbConn\ConnDb;
use PDO;

class EntiLocaliMapper
{
    private $conn;
    private const SELECT_REG = 'SELECT nome FROM regioni WHERE 1';
    private const FIND_PROV_BY_REG = 'SELECT p.nome FROM province p inner join regioni r on r.id = p.id_regione and r.nome = :regione';
    private const FIND_COM_BY_PRO = 'SELECT c.nome FROM comuni c inner join province p on p.id = c.id_provincia and p.nome = :provincia';


    public function __construct()
    {
        $dbConn = new ConnDb();
        $this->conn = $dbConn->getConn();
    }

    //utilizzato per la prima select delle regioni

    /**
     * @return array|mixed
     */
    public function fetchAllRegioni()
    {
        $stmt = $this->conn->prepare(self::SELECT_REG);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $nome = $row['nome'];
            echo "<option value='$nome'>$nome</option>";
        }
    }

    //utilizzato per la seconda select delle province

    /**
     * @return array|bool
     */
    public function findProvByReg()
    {
        if (isset($_GET['regione'])) {
            header("Content-type: application/json");
            $stmt = $this->conn->prepare(self::FIND_PROV_BY_REG);
            $idReg = $_GET['regione'];
            $stmt->bindParam(':regione', $idReg);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $jsonarray = [];
            foreach ($result as $row) {
                $jsonarray[] = $row;
            }
            echo json_encode($jsonarray);
        }
    }

    //utilizzato per la terza select dei comuni

    /**
     * @return array|bool
     */
    public function findComByPro()
    {
        if (isset($_GET['provincia'])) {
            header("Content-type: application/json");
            $stmt = $this->conn->prepare(self::FIND_COM_BY_PRO);
            $idPro = $_GET['provincia'];
            $stmt->bindParam(':provincia', $idPro);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $jsonarray = [];
            foreach ($result as $row) {
                $jsonarray[] = $row;
            }
            echo json_encode($jsonarray);
        }
        return TRUE;
    }

}
