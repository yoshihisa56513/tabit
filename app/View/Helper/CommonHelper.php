<?php 
App::uses('AppHelper', 'View/Helper');
class CommonHelper extends AppHelper {
	
	function tmb($embedUrl) {
		$returnValue = "";
		$pattern = '/www.youtube.com\/embed\/(.+?)\"/';
		preg_match($pattern, $embedUrl, $returnVlue);
		return $returnValue[1];



}


	

}