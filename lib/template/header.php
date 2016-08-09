<?php
namespace lib\template;

use config\main as c;

class header{
	public $out;

	public function index($lang, $slug){
		$this->out = "<!DOCTYPE html>\n";
		$this->out .= "<html>\n";
		$this->out .= "<head>\n";
		$this->out .= $this->meta($lang, $slug);
		$this->out .= "<title>".$this->title($lang, $slug)."</title>\n";
		$this->out .= $this->css($lang, $slug);
		$this->out .= $this->js($lang, $slug);
		$this->out .= "</head>\n";
		return $this->out;
	}

	public function title($lang, $slug){
		$title = $lang->index("home");
		if(!empty($slug[0])) :
			switch ($slug[0]) { 
				case 'login': 
					$title = $lang->index("login");
					break;
				case 'category':
					$title = $lang->index("category");
					break;
				case 'view':
					$title = $lang->index("view");
					break;
				case 'profile':
					$title = $lang->index("profile");
					break;
				case 'search':
					$title = $lang->index("search");
					break;
				default:
					$title = $lang->index("home");
					break;
			}
		endif;
		return $title;
	}

	public function meta($lang, $slug){
		$meta = "";
		$meta .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n";
		$meta .= "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />\n";
		$meta .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0\" />\n";
		return $meta;
	}

	public function css($lang, $slug){
		$css = "";
		$css .= "<link href=\"".c::WEBSITE."public/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />\n";
		$css .= "<link href=\"".c::WEBSITE."public/css/font-awesome-css.min.css\" rel=\"stylesheet\" type=\"text/css\" />\n";
		return $css;
	}

	public function js($lang, $slug){
		$js = "";
		$js .= "<script src=\"".c::WEBSITE."public/js/jquery.js\"></script>\n";
		$js .= "<script src=\"".c::WEBSITE."public/js/scripts.js\"></script>\n";
		$js .= "<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBb7JZAejFpfrFm7MGf_40VST2XTUn4wFU\"></script>\n";
		return $js;
	}
}
?>