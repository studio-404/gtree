<?php
namespace lib\functions\load;

use config\main as c;
use lib\database\connection as connection;
use lib\functions\url as url;
use lib\template as temp;
use lib\functions\lang as lang;
use lib\functions\cache as cache; 

class page{
	public $head;
	public $footer;
	public $conn;
	public $pages;

	function __construct(){
		$this->connection = new connection();
		$this->conn = $this->connection->conn();		
		$this->request = new url\request();		
		$this->currentSlug = new url\slug();
		$this->params = $this->currentSlug->params();
		
		if(
			$this->request->method("GET", "crop")=="true" && 
			$this->request->method("GET", "f") && 
			is_numeric($this->request->method("GET", "w")) && 
			is_numeric($this->request->method("GET", "h"))  
		){
			try{
				$crop = new \lib\functions\image\crop();
				readfile($crop->dojob(
					$this->request->method("GET", "f"), 
					$this->request->method("GET", "w"), 
					$this->request->method("GET", "h"), 
					0
				));
			}catch(exception $e){
				echo "Error ...";
			}
			exit();
		}
	}

	public function bootstap(){
		$c = new c();		
		$this->slug = new url\slug();
		$this->params = $this->slug->params();
		$lang = new lang\l();
		$header = new temp\header();	
		$footer = new temp\footer();
		$cache = new cache\modules();

		if(empty($this->params[0])){ $this->params[0] = "home";	}

		print($header->index($lang, $this->params));			
		switch ($this->params[0]) { 
			case 'login': 
				@include("website/login.php");
				break;
			case 'category':
				@include("website/category.php");
				break;
			case 'view':
				@include("website/product.php");
				break;
			case 'profile':
				@include("website/profile.php");
				break;
			case 'search':
				@include("website/search.php");
				break;
			case 'map':
				@include("website/map.php");
				break;
			default:
				@include("website/homepage.php");
				break;
		}
		print($footer->index($lang));		
	}
}
?>