<?php

namespace dbConn;

use PDO;

class ConnDb
{
    private $config;
    private $conn;


    /**
     * ConnDb constructor.
     */
    public function __construct()
    {
        $this->config = include_once __DIR__ . '/../../common/dbConfig.php';
        $dbHost = $this->config['db']['host'];
        $dbName = $this->config['db']['name'];
        $dbUsername = $this->config['db']['username'];
        $dbPassword = $this->config['db']['password'];
        $this->conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @return PDO
     */
    public function getConn(): PDO
    {
        return $this->conn;
    }
}