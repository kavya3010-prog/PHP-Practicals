<?php

class DbConnect
{
    private $host = "localhost";
    private $dbname = "college";
    private $username = "root";
    private $password = "";

    public function connection()
    {
        try {
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->username,
                $this->password
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Success";

            return $conn;
        }
        catch (PDOException $e) {
            echo "Try Again<br>";
            echo "Error: " . $e->getMessage();
        }
    }
}

// Create object
$db = new DbConnect();

// Call connection function
$conn = $db->connection();

?>