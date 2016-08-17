<?php
namespace lib\functions\validate;
class replace{

	public static function call($str, $arg = array()){
		$out = $str;
		if($arg["removeAllSymbols"]=="true"){
			$out = self::removeAllSymbols($out);
		}
		if($arg["removeAllWhitespaces"]=="true"){
			$out = self::removeAllWhitespaces($out);
		}
		if($arg["removeLastWhitespace"]=="true"){
			$out = self::removeLastWhitespace($out);
		}
		if($arg["removeAllTags"]=="true"){
			$out = self::removeAllTags($out);
		}
		return $out;
	}

	public static function removeAllSymbols($str){
		$out = preg_replace('/[^\p{L}\p{N}\s]/u', '', $str);
		return $out;
	}
	
	public static function removeAllWhitespaces($str){
		$out = str_replace(' ', '', $str);
		return $out;
	}

	public static function removeLastWhitespace($str){
		$out = trim($str, " ");
		return $out;
	}

	public static function removeAllTags($str){
		$out = strip_tags($str);
		return $out;
	}
	
}
?>