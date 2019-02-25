<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Mauricio Silva :: Online Portfolio</title>

<link rel="stylesheet" type="text/css"  href="css/main2010.css" />



<script type="text/javascript">

function toggleLayer( whichLayer )

{

  var elem, vis;

  if( document.getElementById ) // this is the way the standards work

    elem = document.getElementById( whichLayer ).style.visibility = 'visible';

  else if( document.all ) // this is the way old msie versions work

      elem = document.all[whichLayer].style.visibility = 'visible';

  else if( document.layers ) // this is the way nn4 works

    elem = document.layers[whichLayer].style.visibility = 'visible';

  vis = elem.style;

  // if the style.display value is blank we try to figure it out here

  if(vis.display==''&&elem.offsetWidth!=undefined&&elem.offsetHeight!=undefined)

    vis.display = (elem.offsetWidth!=0&&elem.offsetHeight!=0)?'block':'none';

  vis.display = (vis.display==''||vis.display=='block')?'none':'block';

}







//HERE STARTS THE AJAX

function loadVideo(video)

{

	var httpRequest;  // The variable that makes Ajax possible!

	

		try{

			// Opera 8.0+, Firefox, Safari

			httpRequest = new XMLHttpRequest();

		} catch (e){

			// Internet Explorer Browsers

			try{

				httpRequest = new ActiveXObject("Msxml2.XMLHTTP");

			} catch (e) {

				try{

					httpRequest = new ActiveXObject("Microsoft.XMLHTTP");

				} catch (e){

					// Something went wrong

					alert("Your browser broke!");

					return false;

				}

			}

		}

		// Create a function that will receive data sent from the server

		httpRequest.onreadystatechange = function(){

			if(httpRequest.readyState == 4){

				var ajaxDisplay = document.getElementById('video');

				ajaxDisplay.innerHTML = httpRequest.responseText;

			}

		}

		

		var query = "?video=" + video;

		

		httpRequest.open("GET", "load-video.php" + query, true);

		httpRequest.send(null);

}





//HERE FINISHES THE AJAX

</script>

</head>

<body onload="loadVideo('video01');">

<div id="wrapper">

  <div id="content">

	

      <!-- THE VIDEOS WILL LOAD IN THIS DIV-->

      <div id="video" style="display:block;"></div>

    

      <div id="Bottom">

        <a href="javascript://" onclick="loadVideo('video01');"><img src="port/14_s.jpg" alt="" /></a>

        <a href="javascript://" onclick="loadVideo('video02');"><img src="port/15_s.jpg" alt="" /></a>

        <a href="javascript://" onclick="loadVideo('video03');"><img src="port/16_s.jpg" alt="" /></a><br /><br />

        <a href="index.php">Back to previous page</a>

      </div>

  </div>

</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">

</script>

<script type="text/javascript">

_uacct = "UA-3452272-2";

urchinTracker();

</script>

</body>

</html>