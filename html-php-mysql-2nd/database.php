<?php class Database
{
	private $host = "localhost";
	private $username = "root";
	private $password = "Beniwal3@$";
	private $db = "testing";
	private $con;

	public function  __construct()
	{
		$this->con = mysqli_connect($this->host, $this->username, $this->password, $this->db);		
	}
	// public
	// function connection()
	// {
	// 	$this->con = mysqli_connect($this->host, $this->username, $this->password, $this->db);

	// }
	protected
	function query($sql)
	{
		$r = mysqli_query($this->con,$sql);
		return $r;
	}
 	
 	public
 	function getRows()
 	{
 		$sql = "SELECT * FROM `students` WHERE mobile_no = 9413257506;";
 		// $this->connection();
 		$result = $this->query($sql);
 		$rows = $this->fetchData($result);
 		return $rows;
 	}

 	protected 
 	function fetchData($r)
 	{
 		$arr = array();
 		while($rows = mysqli_fetch_assoc($r))  
 		{
 			$arr[] = $rows;
    	return $arr;
 	}

}