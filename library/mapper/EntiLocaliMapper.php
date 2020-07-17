<?php


namespace mapper;


use dbConn\ConnDb;
use PDO;
use PDOException;

class EntiLocaliMapper
{
    private $conn;
    private const SELECT = 'SELECT nome FROM regioni';
    private const FIND = 'SELECT * FROM regioni where id = :id';
    private const FIND_PROVINCIA_BY_REGIONE = 'select p.nome from province p inner join regioni r on r.id = p.id_regione and r.id = :id';
    private const FIND_PROV_BY_REG = 'SELECT p.nome FROM province p inner join regioni r on r.id = p.id_regione and r.nome = :regione';
    private const FIND_COMUNE_BY_REGIONE_E_PROVINCIA = 'select c.nome from comuni c inner join province p on p.id = c.id_provincia and p.id_regione = :idReg and p.id = :idProv';
    private const ERROR_GENERIC = -1;

    public function __construct()
    {
        $dbConn = new ConnDb();
        $this->conn = $dbConn->getConn();
    }

    /**
     * @return array|bool
     */
    public function fetchAll()
    {
        try {
            $stmt = $this->conn->prepare(self::SELECT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
            $rows = [];
            foreach ($result as $row) {
                $rows[] = $row;
            }
            return $rows;
            /*return $stmt->fetchAll(PDO::FETCH_ASSOC);*/
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return TRUE;
    }


    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        try {
            $stmt = $this->conn->prepare(self::FIND);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return TRUE;
    }

    /**
     * @param $id
     * @return array|bool|int
     */
    public function findProvinciaByRegione($id)
    {
        try {
            $stmt = $this->conn->prepare(self::FIND_PROVINCIA_BY_REGIONE);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
            $rows = [];
            foreach ($result as $row) {
                $rows[] = $row;
            }
            if (count($rows) > 0) {
                return $rows;
            } else {
                return self::ERROR_GENERIC;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return TRUE;
    }


    //utilizzato per la prima select delle regioni

    /**
     * @return array|mixed
     */
    public function fetchAllRegioni()
    {
        $query = 'SELECT nome FROM regioni WHERE 1';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rows = [];
        foreach ($result as $row) {
            $nome = $row['nome'];
            $res = "<option value='$nome'>$nome</option>";
            echo $res;
            $rows[] = $res;
        }
        return $rows;
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
            echo json_encode($result);
            return $result;
        }
        return TRUE;
    }

    /**
     * @param $idReg
     * @param $idProv
     * @return array|bool|int
     */
    public function findComuneByRegioneProvincia($idReg, $idProv)
    {
        try {
            $stmt = $this->conn->prepare(self::FIND_COMUNE_BY_REGIONE_E_PROVINCIA);
            $stmt->bindParam(":idReg", $idReg);
            $stmt->bindParam(":idProv", $idProv);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
            $rows = [];
            foreach ($result as $row) {
                $rows[] = $row;
            }
            if (count($rows) > 0) {
                return $rows;
            } else {
                return self::ERROR_GENERIC;
            }
            /*return $stmt->fetchAll(PDO::FETCH_ASSOC);*/
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return TRUE;
    }

}
