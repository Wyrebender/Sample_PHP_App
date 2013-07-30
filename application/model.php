<?php

//MODEL CLASS
class Model {
	private $db = NULL;
	function __construct(){
		$this->db = new \PDO(MY_DSN, MY_USER, MY_PASS);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}//end method construct
	
	//MySQL Query
	public function listArticles($limit = 9999) { //set a limit with a variable inside a perameter
	$query = $this->db->prepare("
		SELECT 
			postID as id,
			postTitle as title,
			imageID as imgid
	
		FROM 
			posts
	
		ORDER BY
			postDate DESC
	
		LIMIT :limit
	"); //end MySQL Query

	try {
		$query->bindParam(':limit', $limit, PDO::PARAM_INT);
		if ($query->execute()){
			$result = $query->fetchAll(\PDO::FETCH_ASSOC);
			if(count($result) > 0){return $result;}
		} //end if query->execute()
	} catch(\PDOException $err) {
			return false;
	} //end try/catch
	//in case of no return
		return false;
  	} //end method listArticles

	public function getArticle($id) {

	//MySQL Query
	$query = $this->db->prepare("
	SELECT
		postTitle as title,
		postBody as body,
		postDate as date,
		imageID as imgid

	FROM
		posts

	WHERE

		postID = :id
	"); //end MySQL Query

	try {
		$query->bindParam(':id', $id, PDO::PARAM_INT);
		if ($query->execute()) {
			$result = $query->fetchAll(\PDO::FETCH_ASSOC);
			if(count($result) > 0){return $result[0];}
		} //end if query->execute()

		} catch(\PDOException $err) {
				return false;
		} //end try/catch
		//in case of no return
                return false;
	}

	public function getImagePath($id) {
	
	//MySQL Query
	$query = $this->db->prepare("
		SELECT
			imagePath
		FROM
			images
		WHERE
			imageID = :id
	"); //end MySQL Query

	try{
		$query->bindParam(':id', $id, PDO::PARAM_INT);
		if ($query->execute()) {
				$result = $query->fetchAll(\PDO::FETCH_ASSOC);
				if(count($result) > 0){return $result[0]['imagePath'];}
		} //end if query->execute()

	} catch(\PDOException $err) {
			return false;
	} //end try/catch
	//in case of no return
	return false;
	}
}

?>