<?php

	echo '<h1> Home </h1>';
	//print_r($data);
	$data = array(); //Error occurs without this line. Error says 'Invalid argument supplied for foreach()'.  Working to correct error.
	
	foreach($data as $art) {
		echo '<div class="article">';
		echo '<a href="index.php?p=article&id='.$art['id'].'">';
		echo ($art['title']);
		echo '</a>';
		echo '</div>';
	} //end foreach

?>
