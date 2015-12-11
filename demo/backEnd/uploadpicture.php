<?php
$file=$_FILES['file']['type'];
$filename=$_FILES['file']['tmp_name'];
$a=array(
'gif'=>'image/gif',
'jpg'=>'image/jpeg',
'png'=>'image/png'
);
foreach($a as $key => $v){
		if($file == $v){
			if($_FILES['file']['error']>0){
				echo 'Return Code:'.$_FILES['file']['error']."<br/>";
			}
			else{
				$percent=0.5;
				list($width,$height) = getimagesize($filename);
				$new_width=$width*$percent;
				$new_height=$height*$percent;
				$image_p= imagecreatetruecolor($new_width,$new_height);
				switch($file){
					case 'image/jpeg':
				    $image=imagecreatefromjpeg($filename);
					imagecopyresampled($image_p,$image,0,0,0,0,$new_width,$new_height,$width,$height);
					imagejpeg($image_p,'../../upload/'.$key.'/'.$_FILES['file']['name']);
					imagedestroy($image_p); 
					echo 'sucess~  >_<~';
					break;
					case 'image/gif':
					
					$image=imagecreatefromgif($filename);
					imagecopyresampled($image_p,$image,0,0,0,0,$new_width,$new_height,$width,$height);
					imagegif($image_p,'../../upload/'.$key.'/'.$_FILES['file']['name']);
					imagedestroy($image_p); 
					echo 'sucess~  >_<~';
					break;
					case 'image/png':
					
					$image=imagecreatefrompng($filename);
					imagecopyresampled($image_p,$image,0,0,0,0,$new_width,$new_height,$width,$height);
					imagepng($image_p,'../../upload/'.$key.'/'.$_FILES['file']['name']);
					imagedestroy($image_p); 
					echo 'sucess~  >_<~';
					break;
			    }
		    }
		
	}
}
?>