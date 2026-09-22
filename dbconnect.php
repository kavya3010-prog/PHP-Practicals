<?php

class DbConnect
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "company_db";

    public function connection()
    {
        try
        {
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->database",
                $this->username,
                $this->password
            );

            $conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            echo "<p style='color:green;'>
                    Success: Database connected successfully.
                  </p>";

            return $conn;
        }
        catch(PDOException $e)
        {
            echo "<p style='color:red;'>Try Again</p>";

            echo "<p style='color:red;'>
                    Error: " . $e->getMessage() . "
                  </p>";

            return null;
        }
    }
}

$db = new DbConnect();

$conn = $db->connection();

?>