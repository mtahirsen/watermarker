<?php
	
	
	$source = "source/";
	$target = "watermarked/";
	$watermark = "watermark.png";

	$i = 0;
	foreach(glob("{$source}*") as $image){
		$i++;

		$wimage = str_replace($source,$target,$image);
		shell_exec("composite -gravity center $watermark $image $wimage");
		print "$i görev tamamlandı, ürün kodu : $image \n";
	}
	
?>