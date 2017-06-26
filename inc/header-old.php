<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Lino&#8217;s Italian Restaurant</title>
	<link rel="icon" href="img/Linos_icon.jpg" type="img/jpg"/>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />


	<script language="JavaScript" type="text/javascript">
			$(document).ready(function(){
    			$('.carousel').carousel({
    			   interval: 3000
    			})
		  });    
	</script>  
</head>

<body id="topofpage">

<div class="container-fluid text-center">

	<!-- ************************************************************************** -->
   <!--Navbar-->
    <nav class="navbar navbar-default"> 
       <div class="container-fluid">
       		<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	      		</button> 
	            	<!-- <a href="index.php" class="navbar-brand"> -->
<!-- 						<img class="img-responsive logo" src="img/Linos_icon.jpg" alt="Lino's Italian Restaurant" />
	            	</a> --> 	            	
	            	<a href="index.php">
	            	<img class="logo" src="img/Linos_icon.jpg" alt="Lino's Italian Restaurant" />
	            	</a> 
            </div>
			<div class="collapse navbar-collapse" id="myNavbar"> 
				<ul class="nav navbar-nav navbar-right nav-pills">
					<li class="nav-item">
						<a href="menu.php"><strong>Menu</strong></a>
					</li>
					<li class="nav-item">
						<a href="wine-cocktails.php"><strong>Wine &#038; Cocktails</strong></a>
					</li>
					<li class="nav-item">
						<a href="private-events.php"><strong>Catering &amp Banquets</strong></a>
					</li>
					<li class="nav-item">
						<a href="gallery.php"><strong>Gallery</strong></a>
					</li>
					<li class="nav-item">
						<a href="news-press.php"><strong>In the Press</strong></a>
					</li>
					<li class="nav-item">
						<a href="contact.php"><strong>Contact</strong></a>
					</li>					
				</ul>			 
			</div>
		</div><!-- end of container -->	
	</nav> <!--End Navbar-->
    <!-- ************************************************************* -->
    <!--Carousel-->


    <!-- style="visibility: hidden; position: relative; margin: 0 auto; width: 980px; height: 380px; overflow: hidden -->
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
      <div class="item active"> <!-- carsouel image #0 -->
          <img src="img/linos_building.png"  title="Linos-963&#215;416" alt="" />                     
      </div>    
      <div class="item">  <!-- carsouel image #1 -->
          <img src="img/dads_town1.png" title="pasta-tomatoe" alt="" /> 
          
      </div>
      <div class="item"> <!-- carsouel image #2 -->
          <img src="img/moms_town.png" title="italian-flag" alt=""/>
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

    <!--End Carousel-->

