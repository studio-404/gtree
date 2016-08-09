<?php
class lib_database_deletecompany extends lib_database_connection{
	public function delete_me($id){
		$conn = $this->conn(); 
		$sql = 'UPDATE `_projectx_table` SET `status`=:status WHERE `id`=:id';
		$prepare = $conn->prepare($sql); 
		$prepare->execute(array(
			":status"=>1, 
			":id"=>$id
		));
		if($prepare->rowCount() > 0){
			echo "Done";
		}else{
			echo "Error";
		}
	}
}
?>