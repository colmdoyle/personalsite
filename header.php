<!-- BEGIN header.php -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php

require('functionFile.php');

?>

<html xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml"
      xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Colm is ainm dom - The personal site of Colm Doyle</title>
	    <link rel="shortcut icon" href="http://www.colmisainmdom.com/favicon.ico" />
				
		<!-- Meta Tags -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		
		<!-- OG Tags -->
	    <meta property="og:title" content="Colm is ainm dom"/>
	    <meta property="og:type" content="website"/>
	    <meta property="og:url" content="<?php echo curPageURL(); ?>"/>
	    <meta property="og:image" content="http://www.colmisainmdom.com/img/headshot.jpg"/>
    	<meta property="og:sitename" content="Colm is ainm dom"/>
     	<meta property="fb:app_id" content="140479545983869"/>
    	<meta property="og:description" content="The website of a twenty something developer from Dublin, Ireland"/>


    	
		<!-- include javascript -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="javascript/colmisainmdom.jquery.js"></script>
		
		<!-- include CSS (Mostly Blueprint) -->
		<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection"/>
		<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print"/>
		<!--[if lt IE 8]>
		  <link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"/>
		<![endif]-->
		<link href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold&subset=latin" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="css/custom.css" type="text/css" media="screen, projection"/>

		<!-- Urchin -->
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-2312829-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
	</head>
	
	<body>
	
	<!-- include FB Javascript SDK -->
	<div id="fb-root"></div>
	<script type="text/javascript">
	  window.fbAsyncInit = function() {
	    FB.init({appId: '140479545983869', status: true, cookie: true,
	             xfbml: true});
	  };
	  (function() {
	    var e = document.createElement('script'); e.async = true;
	    e.src = document.location.protocol +
	      '//connect.facebook.net/en_US/all.js';
	    document.getElementById('fb-root').appendChild(e);
	  }());
	</script>
	<div id="header" class="container">
		<hr class="space"/>
		<div id="left_header" class="span-21">
			<h1 id="name">Colm Doyle</h1>
			<h4>A twenty something developer from Dublin, Ireland</h4>
		</div>
		<div id="right_header" class="span-3 last">
			<img src="img/headshot.jpg" alt="Photo of Colm Doyle" width="75" height="75" />
		</div>
		<hr/>
	</div>	
<!-- END header.php -->
