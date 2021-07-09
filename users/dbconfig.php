<?php
class Database
{

    private $host = "remotemysql.com";
    private $db_name = "TFAhTVfagm";
    private $username = "TFAhTVfagm";
    private $password = "6khKBw8IRi";
    public $conn;

    public function dbConnection()
	{
	 $this->conn = null;
	  try
		{
		$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	  catch(PDOException $exception)
		{
			echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
