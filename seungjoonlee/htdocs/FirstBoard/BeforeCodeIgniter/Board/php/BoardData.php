<?php
	require("db.php");
	require("config.php"); 

	class BoardData
	{

		public $mDbConn;

		function __construct(){
			global $config;
			$this->mDbConn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
        }

        function __destruct(){
        	echo 'destruct';
        	$this->mDbConn->close();
        }

		function getAllBoardData() {
			$sql = "SELECT * FROM Board";
			$result = mysqli_query($this->mDbConn, $sql);
			$tempArray = array();
			$myArray = array();
       		while($row = $result->fetch_object()) {
                $tempArray = $row;
                array_push($myArray, $tempArray);
            }
        	return json_encode($myArray);
		}

		function getLength() {
			echo 'getLength';
			$sql = "SELECT * FROM Board";
			$result = mysqli_query($this->mDbConn, $sql);

			return $result->num_rows;
		}
	}
 ?>