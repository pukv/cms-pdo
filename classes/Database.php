<?php

class Database
{
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASS;

    public $conn;

    /**
     * Establishes and returns the PDO database connection.
     *
     * Initializes the connection using the object's host, database name,
     * username, and password properties. Sets the error mode to throw exceptions.
     *
     * @return \PDO|null The PDO connection instance, or null if the connection fails.
     */

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password,
            );
            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION,
            );
        } catch (PDOException $exception) {
            echo "Connection error" . $exception->getMessage();
        }

        return $this->conn;
    }
}
