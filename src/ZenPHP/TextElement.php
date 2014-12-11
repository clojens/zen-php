<?php
namespace ZenPHP;

//require_once(dirname(__FILE__) . '/Element.php');

class TextElement extends Element {
	
	private $content;
	
	public function __construct($content, $parent = null) {
		$this->setParent($parent);
		$this->content = $content;
	}
	
	public function addChild($child){
		if ($this->getParent() != null)
			$this->getParent()->addChild($child);
	}

	public function parse($tabCount = 0) {
		$tabs = $this->getTabString($tabCount);
		return $tabs . implode("\n" . $tabs, explode("\n", $this->content)) . "\n";
	}
	
}


