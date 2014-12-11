<?php
namespace ZenPHP;

//require_once(dirname(__FILE__) . '/Element.php');

class RootElement extends Element {
	
	public function __construct(){}
	
	public function parse($tabCount = 0) {
		$content = '';
		foreach ($this->getChildren() as $child) {
			$content .= $child->parse($tabCount);
		}
		return $content;
	}
}
