<?php 
App::uses('AppHelper', 'View/Helper');
class CommonHelper extends AppHelper {
	
	function tmb($embedUrl) {
		$returnValue = "";
		$pattern = '/www.youtube.com\/embed\/(.+?)\"/';
		preg_match($pattern, $embedUrl, $returnVlue);
		echo "<img class='y_thumbnail' src='http://img.youtube.com/vi/'.$returnvalue[1].'/0.jpg'>"



}


	

}