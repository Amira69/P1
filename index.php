<!DOCTYPE html>
<html>
<head>
	<title> P1 - DWA15 Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="images/ext_web.png">
	<!-- NOTE: link to stable css -->

	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">

  <!--script src="js/script.js" type="text/javascript"> </script-->

</head>
   <body>
	<div class="container">
		<h2 id="myname">AMIR TABRIZI</h2>
		<img src="images/photo1.jpg" alt="Amir Tabrizi" id="myImage">
    <div class="row-fluid">
      <div class="span6 offset3">
         <h3>About The Job</h3>
				 <p>
					I love to develop application and my experience of programming is well appreciated when
					I can share code with others, by teamwork of dynamic web applications they have to deliver a continuous
					integration before enterprising a release so that every project is similar to a software which modifies
					our lives through	images of triad. I learn with my head for the sake of head however most of the
					things are achieved by body to mimic each other underground. Look at admiral who was piped aboard to pull himself
					up by his own bootstraps, How lazy I could be in this Job! <br><br>
        </p>
      </div>
    </div>

  <!-- NOTE:  carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/p2.jpg" alt="Proj2">
          <div class="carousel-caption">

						<!-- // NOTE: Github ref -->
						<a href=""><i class="glyphicon">
							<img class="img-responsive" src="images/GitHub-Mark-32pxi.png" alt="Github logo"
							onmouseover="this.src='images/GitHub-Mark-32pxr.png'" onmouseout="this.src='images/GitHub-Mark-32pxi.png'" /> </i></a>

							<?php // NOTE: 2nd Ref link?>
							<h4><a href=""> Second Project </a></h4>

            <ul>
              <li>Form inputs to specify:</li>
              <ul>
                <li>How many words to use.</li>
                <li>Whether to include a number.</li>
                <li>Whether to include a special symbol (for example, @).</li>
              </ul>
              <li>Basic server-side validation (for example, what happens if the user enters a string instead of a number to indicate number of words?). You can do client-side validation as well, but it is not a substitute for server-side validation.</li>
            </ul>

			  </div>
        </div>
        <div class="item">
          <img src="images/p3.jpg" alt="">
          <div class="carousel-caption">

						<!-- // NOTE: Github ref -->
						<a href=""><i class="glyphicon">
							<img class="img-responsive" src="images/GitHub-Mark-32pxi.png" alt="Github logo"
							onmouseover="this.src='images/GitHub-Mark-32pxr.png'" onmouseout="this.src='images/GitHub-Mark-32pxi.png'"/> </i></a>

						<?php // NOTE: 2nd Ref link?>
            <h4><a href=""> Third Project  </a> </h4>

            <ul>
              <li>Creating a new Laravel app.</li>
              <li>Installing and using Composer packages.</li>
               <li>Routing basics.</li>
              <li>Views.</li>
              <li>Deploying a Laravel app on a live server.</li>
            </ul>
          </div>
        </div>
        <div class="item">
          <img src="images/p4.jpg" alt="">
          <div class="carousel-caption">

						<!-- // NOTE: Github ref -->
						<a href=""><i class="glyphicon">
							<img class="img-responsive" src="images/GitHub-Mark-32pxi.png" alt="Github logo" id="icongithub"
							onmouseover="this.src='images/GitHub-Mark-32pxr.png'" onmouseout="this.src='images/GitHub-Mark-32pxi.png'"/> </i></a>

						<?php // NOTE: 2nd Ref link?>
            <h4><a href=""> Fourth Project  </a> </h4>

            <ul>
              <li>Uses PHP/Laravel.</li>
              <li>Uses a database with at least 2 tables. This count does not include a users table, but does include pivot tables.</li>
              <li>Demonstrates all 4 CRUD interactions (user signup/login does not count towards this).</li>
              <li>Demonstrates basic server-side error validation.</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
    </div>

  </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>
</html>
