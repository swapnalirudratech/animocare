<?php

class Database
{
    // private $host = "localhost";
    // private $dbname = "";
    // private $username = "";
    // private $password = "";

    private $host = "localhost";
    private $dbname = "animocare";
    private $username = "root";
    private $password = "";

    private $charset = "utf8mb4";
    private $pdo;
    private $base_url = "https://animocare.test/";
    private $software = "https://software.teamrudra.com/";
    private $softwareid = "4";

    private $siteName = "Animocare Admin panel";

    public function __construct()
    {

        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getConnection()
    {
        if ($this->pdo instanceof PDO) {
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } else {
            throw new Exception("Connection not established.");
        }
    }
    public function getUrl()
    {
        return  $this->base_url;
    }

    public function getSiteName()
    {
        return  $this->siteName;
    }

    public function getSoftware()
    {
        return  $this->software;
    }
    public function getSoftwareId()
    {
        return  $this->softwareid;
    }
}
