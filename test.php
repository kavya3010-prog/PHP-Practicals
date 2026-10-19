<?php

class DbConnect
{
    function connection()
    {
        try
        {
            $conn = new mysqli("localhost", "root", "", "test");

            if ($conn->connect_error)
            {
                throw new Exception($conn->connect_error);
            }

            echo "Success";
        }
        catch (Exception $e)
        {
            echo "Try Again";
            echo "<br>Error: " . $e->getMessage();
        }
    }
}

$db = new DbConnect();
$db->connection();

?>