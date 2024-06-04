<?php
class Database
{

<<<<<<< HEAD
    private $host = "localhost";
    private $db_name = "hrm";
    private $username = "root";
    private $password = "";
=======
    private $host = "remotemysql.com";
    private $db_name = "TFAhTVfagm";
    private $username = "TFAhTVfagm";
    private $password = "6khKBw8IRi";
>>>>>>> 0e4cc7824f2ecd9f890c54ad5298241ed59b8ea7
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
