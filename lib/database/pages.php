<?php
namespace lib\database;

use lib\database\connection as connection;
use lib\functions\url\slug as slug;

class pages{
	public $conn;	

	public function index($call){
		$fetch = array();
		$connection = new connection();
		$conn = $connection->conn();
		$this->slug = new \lib\functions\url\slug();
		$this->params = $this->slug->params();
		switch($call){
			case "topmenu":
				$sql = "SELECT * FROM `pages` WHERE `type`=:type AND `visibility`=:zero AND `status`=:zero";
				$prepare = $conn->prepare($sql);
				
				$prepare->execute(array(
					":type"=>"topmenu", 
					":zero"=>0 
				));

				if($prepare->rowCount()){
					$fetch = $prepare->fetchAll(\PDO::FETCH_ASSOC); 
				}
				break;
			case "subcat":
				$sql = "SELECT * FROM `pages` WHERE `type`=:type AND `subid`=:zero AND  `visibility`=:zero AND `status`=:zero ORDER BY `position` ASC";
				$prepare = $conn->prepare($sql);
				
				$prepare->execute(array(
					":type"=>"category", 
					":zero"=>0 
				));

				if($prepare->rowCount()){
					$fetch = $prepare->fetchAll(\PDO::FETCH_ASSOC); 
				}
				break;
			case "currentCat":
					$sql = "SELECT `title`, `slug` FROM `pages` WHERE `type`=:type AND `slug`=:slug AND  `visibility`=:zero AND `status`=:zero ORDER BY `position` ASC";
					$prepare = $conn->prepare($sql);
					$imp = implode("/", $this->params);
					$prepare->execute(array(
						":type"=>"category", 
						":slug"=>$imp,
						":zero"=>0 
					));

					if($prepare->rowCount()){
						$fetch = $prepare->fetch(\PDO::FETCH_ASSOC); 
					}
				break;
			case "subNavCat":
					$sql = "SELECT `title`, `slug` FROM `pages` WHERE `type`=:type AND `subid`=:subid AND  `visibility`=:zero AND `status`=:zero ORDER BY `position` ASC";
					$prepare = $conn->prepare($sql);
					$prepare->execute(array(
						":subid"=>$this->params[1], 
						":type"=>"category", 
						":zero"=>0 
					));

					if($prepare->rowCount()){
						$fetch = $prepare->fetchAll(\PDO::FETCH_ASSOC); 
					}
				break;
			case "profileNav":
				$sql = "SELECT `title`, `slug` FROM `pages` WHERE `type`=:type AND `visibility`=:zero AND `status`=:zero ORDER BY `position` ASC";
					$prepare = $conn->prepare($sql);
					$prepare->execute(array(
						":type"=>"profile", 
						":zero"=>0 
					));

					if($prepare->rowCount()){
						$fetch = $prepare->fetchAll(\PDO::FETCH_ASSOC); 
					}
				break;
		}
		return $fetch;
	}

}
?>