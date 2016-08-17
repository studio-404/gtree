<?php
namespace lib\functions\validate;

class browser{
	public function get_browser(){
		$browser = get_browser(null, true);
		$this->browser = strtolower($browser['browser']);
		return $this->browser;
	}
}
?>