<?php

  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
  }
  // select loggedin users detail
  $res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
  $userRow=mysqli_fetch_array($res);

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME PAGE</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="css/animate.css">
		  <link rel="stylesheet" type="text/css" href="css/style.css">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
		  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan" rel="stylesheet">
		  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <style type="text/css">
         .header{
                background : #cd1e1e;
                height: 7vh;
              }
              .navbar-fixed-top.scrolled {
                background-color:white;
                box-shadow: 2px 2px 5px red;
                transition: background-color 100ms linear;
              }
              .brand{
                height: 50%;
                width: 50%;
              }
              .collapse li a{
                color:black;
                font-weight: bolder;
                font-size: 17px;
                line-height: 7vh;
              }
      </style>
</head>
<body>

<!-- header -->
<nav class="navbar navbar-line navbar-fixed-top" style="">
  
 <div class="container">
    <div class="navbar-header">
      </div>
          <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="coll.php">HOME</a></li>
                  <li><a href="#">INSTITUTE</a></li>
                  <li><a href="#">DEPARTMENT</a></li>
                  <li><a href="logout.php?logout">
                   <span class="glyphicon glyphicon-log-out"></span>&nbsp;Log out
                  </a></li>
                </ul>    
          </div>
      </div>
</nav>
<div class="logo&menu">
  <div class="container-fluid">
    <div class="row">
        <div class="col-xs-5 wow fadeInLeft" >
              <div class="brand">
                <img src="image/uni.PNG" class="img-responsive">
              </div>
          </div>
      </div>  
         
</div><!-- end of container-->
  </div><!-- end of logo&menu-->
<div class="horizontal"></div>  



											<!-- start of carousel-->


<div class="container wow zoomIn">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="image\p1.png" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Placement</h3>
          
        </div>
      </div>

      <div class="item">
        <img src="image\p1.png" alt="Chicago" style="width:100%;">
        <div class="carousel-caption" > 
          <h3>IRIS</h3>
          
        </div>
      </div>
    
      <div class="item">
        <img src="image\p1.png" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Library</h3>
         
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><!-- end of container-->

											<!-- end of carousel-->
												<!-- Start of news and explore-->
<div class="container-fluid">
  <div class="col-sm-8" style="border:1px solid #a9aaae;">
  
            <p class="news">NEWS</p>
     
   
    <div class="row">
		<div class="col-sm-12">
														<!--tab names -->
						<div class="tabbable-panel">
				<div class="tabbable-line">
					<ul class="nav nav-tabs ">
						<li class="active">
							<a href="#tab_default_1" data-toggle="tab" style="font-size:2.5vh; color:#89ab20;">Placement </a></li>
						<li>
							<a href="#tab_default_2" data-toggle="tab" style="font-size:2.5vh; color:#89ab20;">R & D</a></li>
						<li>
							<a href="#tab_default_3" data-toggle="tab" style="font-size:2.5vh; color:#89ab20;">Admission </a></li>
						<li>
							<a href="#tab_default_3" data-toggle="tab" style="font-size:2.5vh; color:#89ab20;">Alumni </a></li>
						<li>
							<a href="#tab_default_3" data-toggle="tab" style="font-size:2.5vh; color:#89ab20;">CSCITA-17 </a></li>
					</ul>
					<div class="tab-content">


					                                            <!--FIRST TAB -->

						
						<div class="tab-pane active" id="tab_default_1">
						<main class="main columns">
  <section class="column main-column">
    <a class="article wow rollIn" href="#" data-wow-delay="0.5s">
      <figure class="article-image is-16by9">
        <img src="image\p2.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="article-title">
		Campus placements cool at B-schools, engineering colleges, worse yet to come
        </h2>
        <p class="article-content">
          Protectionism in US and UK , which affect Indian IT companies, and demonetisation seen behind slowdown in campus placements
        </p>
      </div>
    </a>
    <div class="columns">
      <div class="column nested-column">
        <a class="article wow rollIn" href="#" data-wow-delay="1s">
          <figure class="article-image is-16by9">
            <img src="image\placement.jpg" alt="">
          </figure>
          <div class="article-body">
            <h2 class="article-title">
              1,113 job offers in campus placements, average salary Rs22 lakh
            </h2><br>
            <p class="article-content">
             The Indian School of Business concluded its final placements for the Post Graduate Programme in Management (PGP) batch of 2017 on a happy note.
			
            </p>  
          </div>
        </a>
      </div>
      <div class="column">
        <a class="article wow zoomIn" href="#" data-wow-delay="0.5s">
          <figure class="article-image is-16by9">
            <img src="image\p1.png" alt="">
          </figure>
          <div class="article-body">
            <h2 class="article-title">
              Amazon India’s HR head
            </h2><br>
            <p class="article-content">
             ‘We are happy to bring interns for a longer period, not just two months... bring in professors who can co-create work with us..
            </p>
          </div>
        </a>       
      </div>
    </div>
  </section>
  <section class="column">
    <a class="article wow slideInLeft" href="#" >
      <figure class="article-image is-3by2">
        <img src="image\p3.png" alt="">
      </figure>
      <div class="article-body">
        <h2 class="article-title">
         IIM placements: An insider’s view
        </h2><br>
        <p class="article-content">
        Campus placements are the final, brutal test the Indian education system throws at you before you are set free
        </p>    
      </div>
    </a>
    <a class="article wow slideInLeft" href="#">
    <figure class="article-image is-3by2">
        <img src="image\p4.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="article-title">
         Engineering colleges campus placements amid hiring slowdown
        </h2><br>
        <p class="article-content">
         Engineering colleges are also diversifying courses on offer and skill development programmes to help students look beyond IT
        </p>        
      </div>
    </a>
   
  </section>
</main>	

							
						</div>


					                                             <!--SECOND TAB -->


						<div class="tab-pane" id="tab_default_2">
						<main class="main columns">
  <section class="column main-column">
    <a class="article" href="#">
      <figure class="article-image is-16by9">
        <img src="image-01-lo.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="article-title">
          Hello World
        </h2>
        <p class="article-content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.
        </p>
      </div>
    </a>
    <div class="columns">
      <div class="column nested-column">
        <a class="article" href="#">
          <figure class="article-image is-16by9">
            <img src="image-02-lo.jpg" alt="">
          </figure>
          <div class="article-body">
            <h2 class="article-title">
              Hello World
            </h2>
            <p class="article-content">
              lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
            </p>  
          </div>
        </a>
      </div>
      <div class="column">
        <a class="article" href="#">
          <figure class="article-image is-16by9">
            <img src="image-03-lo.jpg" alt="">
          </figure>
          <div class="article-body">
            <h2 class="article-title">
              Hello World
            </h2>
            <p class="article-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </a>       
      </div>
    </div>
  </section>
  <section class="column">
    <a class="article" href="#">
      <figure class="article-image is-3by2">
        <img src="image-04-lo.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="article-title">
          Hello World
        </h2>
        <p class="article-content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>    
      </div>
    </a>
    <a class="article" href="#">
    <figure class="article-image is-3by2">
        <img src="image-04-lo.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="article-title">
          Hello World
        </h2>
        <p class="article-content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>        
      </div>
    </a>
   
  </section>
</main>	
							
						</div>

					                                          <!--THIRD TAB-->
						
						<div class="tab-pane" id="tab_default_3">
						<main class="main columns">
  <section class="column main-column">
    <a class="article" href="#">
      <figure class="article-image is-16by9">
        <img src="image-01-lo.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="article-title">
          Hello World
        </h2>
        <p class="article-content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.
        </p>
      </div>
    </a>
    <div class="columns">
      <div class="column nested-column">
        <a class="article" href="#">
          <figure class="article-image is-16by9">
            <img src="image-02-lo.jpg" alt="">
          </figure>
          <div class="article-body">
            <h2 class="article-title">
              Hello World
            </h2>
            <p class="article-content">
              lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
            </p>  
          </div>
        </a>
      </div>
      <div class="column">
        <a class="article" href="#">
          <figure class="article-image is-16by9">
            <img src="image-03-lo.jpg" alt="">
          </figure>
          <div class="article-body">
            <h2 class="article-title">
              Hello World
            </h2>
            <p class="article-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
          </div>
        </a>       
      </div>
    </div>
  </section>
  <section class="column">
    <a class="article" href="#">
      <figure class="article-image is-3by2">
        <img src="image-04-lo.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="article-title">
          Hello World
        </h2>
        <p class="article-content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>    
      </div>
    </a>
    <a class="article" href="#">
    <figure class="article-image is-3by2">
        <img src="image-04-lo.jpg" alt="">
      </figure>
      <div class="article-body">
        <h2 class="article-title">
          Hello World
        </h2>
        <p class="article-content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>        
      </div>
    </a>
   
  </section>
</main>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> </div><br>







					<!--explore-->
	<div class="col-sm-4 wow zoomIn" style="border:1px solid none;" data-wow-delay="1s">
        <p class="news" style="margin-top:6px; text-align:center;">EXPLORE</p>	<hr>
			 <div class="row">
<!-- campus-->
    	<div class="col-lg-12">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<p style="text-align:center;">
							<img src="image\campus.jpg" class="img-responsive" alt="" style="height:25%; width:570%">
						</p>
						<div class="caption">
						<div class="blur"></div>
						<div class="caption-text">
						<a src="#" class="exp1"  ><h2 class="exp" style="border-bottom:2px solid white; padding:6%;">Campus</h2></a><br>
						<p class="article-content">St. Francis Institute of Technology stands tall, surrounded with lush green environment that is unmatched with any 
						other Institute of Technology in the western suburbs of Mumbai.</p>
						</div>
						</div>
					</div><br><br>
		</div>  
<!--Library & Labs<-->
		<div class="col-lg-12">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<p style="text-align:center;">
							<img src="image\ll.jpg" class="img-responsive" alt="" style="height:30%; width:570%">
						</p>
						<div class="caption">
						<div class="blur"></div>
						<div class="caption-text">
						<a href="product.php" class="exp1" ><h2 class="exp" style="border-bottom:2px solid white; padding:6%;">Library & Labs</h2></a><br>
						<p class="article-content">SFIT Library started functioning from on 5th September, 1999.  It is also known as the Learning and Information Resource Centre (LIRC).</p>
						</div>
						</div>
					</div><br><br>
		</div>  
<!--Placement-->
		<div class="col-lg-12">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<p style="text-align:center;">
							<img src="image\placement.jpg" class="img-responsive" alt="" style="height:30%; width:570%">
						</p>
						<div class="caption">
						<div class="blur"></div>
						<div class="caption-text">
						<a src="#" class="exp1" ><h2 class="exp" style="border-bottom:2px solid white; padding:6%;">Placement</h2></a><br>
						<p class="article-content">SFIT foresees these changes and ensure to take measures to equip students with necessary technical and behavioural competencies.</p>
						</div>
						</div>
					</div><br><br>
		</div>  
<!--ecell-->
		<div class="col-lg-12">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<p style="text-align:center;">
							<img src="image\ecell.png" class="img-responsive" alt="" style="height:30%; width:570%">
						</p>
						<div class="caption">
						<div class="blur"></div>
						<div class="caption-text">
						<a src="#" class="exp1" ><h2 class="exp" style="border-bottom:2px solid white; padding:6%;">E-cell</h2></a><br>
						<p class="article-content">The E-Cell of SFIT is an organisation at St. Francis Institute of Technology that aims to promote the 
						institutional vision of transforming youngsters into technological entrepreneurs and innovative leaders. </p>
						</div>
						</div>
					</div><br><br>
		</div>  
</div></div></div><br>
																	<!-- EVENTS-->
				
<div class="container" style="border:1px solid none;" data-wow-delay="1s">
		 <p class="news" style="margin-top:6px; text-align:left;">EVENTS</p>	<hr>
	
			
<div class='row'> 
																	<!--1st corousal-->
    <div class='col-md-12'>
    <div class="carousel slide media-carousel" id="media">
    <div class="carousel-inner">
        <div class="item active">
            <div class="row">
<!--left-->
                <div class="col-md-1">
        <br>
       
				</div>
    
    <div class="col-md-5">
        <h2 class="article-title">
            Annual Function 2017 - <small>SFIT Conference Room</small>
        </h2> <h4>
          15 dec
        </h4>
        <p class="article-content">
            Sample of date display with sample layout. Note image changes color on mouse over and is responsive.
        </p>
	</div>   
<!--right-->			  
          <div class="col-md-1">
        <br>
        <p class="calendar">
            30<br><em>March</em>
        </p>
		</div>
    <div class="col-md-5">
        <h2 class="article-title">
            Annual Meeting 2017 - <small>SFIT Seminar Hall</small>
        </h2><br>
        <p class="article-content">
            Sample of date display with sample layout. Note image changes color on mouse over and is responsive.
        </p>
    </div>       
			
            </div>
        </div>
        <div class="item">												<!--2nd corousal-->
        <div class="row">
<!--left-->
         <div class="col-md-1">
        <br>
        <p class="calendar">
            15<br><em>Oct</em>
        </p>
		</div>
    
    <div class="col-md-5">
        <h2 class="article-title">
            Prize Distribution 2017 - <small>SFIT Exam cell</small>
        </h2><br>
        <p class="article-content">
            Sample of date display with sample layout. Note image changes color on mouse over and is responsive.
        </p>
    </div>   
<!--right-->			  
        <div class="col-md-1">
        <br>
        <p class="calendar">
            5<br><em>March</em>
        </p>
		</div>
    <div class="col-md-5">
        <h2 class="article-title">
            Parents Meeting 2017 - <small>SFIT conference Room</small>
        </h2><br>
        <p class="article-content">
            Sample of date display with sample layout. Note image changes color on mouse over and is responsive.
        </p>
    </div>       
			
            </div>
          </div>
        <div class="item">   											<!--3rd corousal-->
        <div class="row">
<!--left-->
    <div class="col-md-1">
        <br>
        <p class="calendar">
            18<br><em>April</em>
        </p>
	</div>
    
    <div class="col-md-5">
        <h2 class="article-title">
            Iris Meeting 2014 - <small>Francis Assembly Hall</small>
        </h2><br>
        <p class="article-content">
            Sample of date display with sample layout. Note image changes color on mouse over and is responsive.
        </p>
    </div>   
<!--right-->			  
    <div class="col-md-1">
        <br>
        <p class="calendar">
            15<br><em>March</em>
        </p>
    </div>
    <div class="col-md-5">
        <h2 class="article-title">
            Annual Meeting 2014 - <small>Old Boston City Hall</small>
        </h2><br>
        <p class="article-content">
            Sample of date display with sample layout. Note image changes color on mouse over and is responsive.
        </p>
    </div>       
		</div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control" style="font-size:5vh; font-family:bold;">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control" style="font-size:5vh; font-family:bold;">›</a>
		</div>                          
    </div>
  </div>
</div><br>

												<!-- FOOTER-->
<div class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<h3 style="font-family:bold;">Contact us</h3>
				<p>Mt. Poinsur, S.V.P. Road, Near Bhagwati Hospital, Borivali (west), Mumbai, Maharashtra 400130</p>
			</div>
			<div class="col-sm-4">
				<h3 style="font-family:bold;">Social Media</h3>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-snapchat-ghost"></a>
			</div>
			<div class="col-sm-4">
				<h3 style="font-family:bold;">Send us Your Comment:</h3>
				<button class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
</div>												


<!-- for animation -->
  <script src="js/wow.min.js"></script>
		  <script>
		 	 new WOW().init();
		  </script>

<!-- script for nav bar top-->
<script>

      
      $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

</script>

</body>
</html>
<?php ob_end_flush(); ?>