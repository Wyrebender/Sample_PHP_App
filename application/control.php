<?php

//CONTROL CLASS
class Control {
	public $load;
	public $model;
	public $title;
	public $output;

	function __construct() {
		$this->load = new Load();
      		$this->model = new Model();
		$this->title = 'Title';
		$this->output = 'Page Guts';

      	// front switch: maybe use htaccess to make RESTful
		$pg = empty($_GET['p']) ? 'home' : $_GET['p']; 
		$id = empty($_GET['id']) ? 0 : $_GET['id'];

		switch($pg){
			case 'home':
				$this->title = 'Home';
				$this->output = $this->home();
				break;
			
			case 'article':
				$this->title = 'View Article ' .$id;
				$this->output = $this->article($id);
				break;

			default:
				$this->title = 'Error: Returning Home';
				$this->output = $this->home();
				break;
		}
   	} //end method construct
	
	//following methods are page controllers
	function home(){
		$data = $this->model->listArticles(10);
		return $this->load->view('home.php', $data);
	} //end method home

	function article($id){
		$data = $this->model->getArticle($id);
		return $this->load->view('article.php',$data);
	} //end method article
}

?>