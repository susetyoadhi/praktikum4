<?php 

/******************************************
PRAKTIKUM RPL
******************************************/

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	function addTask(){
		
		if (isset($_POST['submit'])){
			$tname = $_POST['tname'];
			$tdetails = $_POST['tdetails'];
			$tsubject = $_POST['tsubject'];
			$tpriority = $_POST['tpriority'];
			$tdeadline = $_POST['tdeadline'];
			$tstatus = "belum";
			
			$query = "INSERT INTO tb_to_do".
			"(name_td,details_td,Subject_td,priority_td,deadline_td,status_td) VALUES".
			"('$tname','$tdetails','$tsubject','$tpriority','$tdeadline','$tstatus')";
			
			return $this->execute($query);
		}
	}
	
	function delTask($id){
	
		$query = "DELETE FROM tb_to_do WHERE id='$id'";
		return $this->execute($query);
	}
	
	Function setTask($id){
		
		$status = "Sudah";
		$query = "UPDATE tb_to_do SET status_td = '$status' WHERE id = '$id'";
		return $this->execute($query);
	}
}



?>
