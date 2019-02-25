//	<?php
//		
//		/* settings */
//		$image_dir = 'imgs/';
//		$per_column = 5;
//		
//		
//		/* step one:  read directory, make array of files */
//		if ($handle = opendir($image_dir)) {
//			while (false !== ($file = readdir($handle))) 
//			{
//				if ($file != '.' && $file != '..') 
//				{
//					if(strstr($file,'-thumb'))
//					{
//						$files[] = $file;
//					}
//				}
//			}
//			closedir($handle);
//		}
//		
//		/* step two: loop through, format gallery */
//		if(count($files))
//		{
//			foreach($files as $file)
//			{
//				$count++;
//				echo '<a class="photo-link" rel="one-big-group" href="',$image_dir,str_replace('-thumb','',$file),'"><img src="',$image_dir,$file,'" width="190" height="124" /></a>';
//				if($count % $per_column == 0) { echo '<div class="clear"></div>'; }
//			}
//		}
//		else
//		{
//			echo '<p>There are no images in this gallery.</p>';
//		}
//		
//	?>

		<a class="zoom" rel="group" title="Group title #1" href="3centralBisado.jpg"><img src="imgs/3centralBisado-thumb.jpg" width="160" height="100" /></a>
		<a class="zoom" rel="group" title="Group title #2" href="mameri.jpg"><img src="imgs/mameri-thumb.jpg" width="160" height="100" /></a>
		<a class="zoom" rel="group" title="Group title #1" href="prosource.jpg"><img src="imgs/prosource-thumb.jpg" width="160" height="100" /></a>
		<a class="zoom" rel="group" title="Group title #3" href="qc.jpg"><img src="imgs/qc-thumb.jpg" width="160" height="100" /></a>
		<a class="zoom" rel="group" title="Group title #4" href="3navi_chart.jpg"><img src="imgs/3navi_chart-thumb.jpg" width="160" height="100" /></a>
		<a class="zoom" rel="group" title="Group title #5" href="4glossary.jpg"><img src="imgs/4glossary-thumb.jpg" width="160" height="100" /></a>
		<a class="zoom" rel="group" title="Group title #6" href="5lenticular.jpg"><img src="imgs/5lenticular-thumb.jpg" width="160" height="100" /></a>
		<a class="zoom" rel="group" title="Group title #7" href="9unifocus.jpg"><img src="imgs/9unifocus-thumb.jpg" width="160" height="100" /></a>
		<a class="zoom" rel="group" href="6adilson.jpg"><img src="imgs/6adilson-thumb.jpg" width="160" height="100" /></a>
		<a class="zoom" rel="group" href="10bostonFestival.jpg"><img src="imgs/10bostonFestival-thumb.jpg" width="160" height="100" /></a>
