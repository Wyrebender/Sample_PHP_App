<?php
	//SKIN CLASS
	class Skin {
		function __construct($template = 'default'){
				$this->template = $template;
				$this->title = '';
				$this->content = '<!-- use fill() -->';
		} //end method construct
		
		function title($title){
				$this->title = $title;
		} //end method title
		
		function fill($content){
				$this->content = $content;
		} //end method fill

		function show(){
				$asset_path = 'skins/'.$this->template.'/';
				return include $asset_path. 'index.php';
		} //end method show
	}

?>

