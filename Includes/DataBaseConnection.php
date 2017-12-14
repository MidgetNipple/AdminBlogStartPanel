<?php


namespace DataBaseConnection;


class DataBaseConnection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "projectdatabase";
    private  $conn;

   function __construct()
    {
        try {
             $this->conn = new \Mysqli($this->servername, $this->username, $this->password, $this->dbname);
        } catch(\Exception $e) {
            throw new $e;
        }
    }

    function query($query) {
        return $this->conn->query($query);
    }



}
?>