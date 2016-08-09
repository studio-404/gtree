<?php
namespace lib\template;

class footer{
	public $out;

	public function index($lang){
		$this->out = "\n</body>\n";
		$this->out .= "</html>\n";
		return $this->out;
	}
}
?>