<?php 
	function limitString($length,$text)
	{
		$string = strip_tags($text);
		if (strlen($string) > $length) {
		    // truncate string
		    $stringCut = substr($string, 0, $length);
		    $endPoint = strrpos($stringCut, ' ');

		    //if the string doesn't contain any space then it will cut without word basis.
		    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
		    $string .= '...';
			$text=$string;
		}
		return $text;
	}
	function compress_image($source_url, $destination_url, $quality, $nama) {
	    ini_set('memory_limit', '-1');
	    
		include 'ImageResize.php';
		$info = getimagesize($source_url);
	    if ($info['mime'] == 'image/jpeg') 
	        $image = imagecreatefromjpeg($source_url); 
	    elseif ($info['mime'] == 'image/gif') 
	        $image = imagecreatefromgif($source_url); 
	    elseif ($info['mime'] == 'image/png') 
	        $image = imagecreatefrompng($source_url); 
	        imagejpeg($image, $destination_url, $quality); 
		
		
		//use \Eventviva\ImageResize;
		//use \Eventviva\ImageResizeException;
		$imageR = new \Eventviva\ImageResize($destination_url);
		$imageR->save($destination_url);
		return $imageR; 
	} 
	function presentaseKecocokan($db,$idTanaman)
	{
		
	}
?>