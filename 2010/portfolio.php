	<?php
		
		/* settings */
		$image_dir = 'imgs/';
		$per_column = 5;
		
		
		/* step one:  read directory, make array of files */
		if ($handle = opendir($image_dir)) {
			while (false !== ($file = readdir($handle))) 
			{
				if ($file != '.' && $file != '..') 
				{
					if(strstr($file,'-thumb'))
					{
						$files[] = $file;
						echo '<p>Images loading.</p>';
}
				}
			}
			closedir($handle);
		}
		
		/* step two: loop through, format gallery */
		if(count($files))
		{
			foreach($files as $file)
			{
				$count++;
				echo '<a class="photo-link" rel="one-big-group" href="',$image_dir,str_replace('-thumb','',$file),'"><img src="',$image_dir,$file,'" width="190" height="124" /></a>';
				if($count % $per_column == 0) { echo '<div class="clear"></div>'; }
			}
		}
		else
		{
			echo '<p>There are no images in this gallery.</p>';
		}
		
	?>
