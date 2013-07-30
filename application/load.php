<?php

//LOAD CLASS
class Load {
	function view($view, $data = null){
		$file = 'views/'.$view;
		if(is_array($data)) {extract($data);}
		if(is_file($file)){
			ob_start();
			include $file;
			return ob_get_clean();
		}
		return false;
	} //end method view
}

?>