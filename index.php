<!DOCTYPE html>
<!-- saved from url=(0034)http://www.blacktie.co/demo/feedo/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://www.blacktie.co/demo/feedo/assets/ico/favicon.ico">

    <title>Quakehelp2015</title>

    
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

     
<body>
	
	<div class="container">
	<div class="row">



		<div class="col-md-3 floatboxfilter">
			<div class="navbar-header">
			    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
	    	</div>

	    	<script id="data-filter" type="text/x-handlebars-template">
				<nav class="collapse navbar-collapse" role="navigation">
				  	<div class="box-title-filter collapse navbar-collapse">
						<h4> Find By</h4>
						</div>

						<ul class="nav navbar-nav">
							
							<li class="filter-option">
								<div class="form-label">Category</div>
							    <form role="search">
							        <div class="form-group">
				        				<select id="catfilter">
										 	<option value="" >Choose Category</option>
											{{#each categories}}
												<option value="{{category.id}}">{{category.title}}</option>
											{{/each}}
										</select><i class="fa fa-spinner fa-spin spinner"></i>
							    	</div>
							    </form>
							</li>

						
							<li class="filter-option">
								<div class="form-label">District</div>
								<form role="search">
							        <div class="form-group">
								        <select id="catfilterplace">
										 	<option value="All" selected>All</option>
										 	<option value="Achham">Achham</option>
										 	<option value="Arghakhanchi">Arghakhanchi</option>
										 	<option value="Baglung">Baglung</option>
										 	<option value="Baitadi">Baitadi</option>
										 	<option value="Bajhang">Bajhang</option>
										 	<option value="Bajura">Bajura</option>
										 	<option value="Banke">Banke</option>
										 	<option value="Bara">Bara</option>
										 	<option value="Bardiya">Bardiya</option>
										 	<option value="Bhaktapur">Bhaktapur</option>
										 	<option value="Bhojpur">Bhojpur</option>
										 	<option value="Chitwan">Chitwan</option>
										 	<option value="Dadeldhura">Dadeldhura</option>
										 	<option value="Dailekh">Dailekh</option>
										 	<option value="Dang">Dang</option>
										 	<option value="Darchula">Darchula</option>
										 	<option value="Dhading">Dhading</option>
										 	<option value="Dhankuta">Dhankuta</option>
										 	<option value="Dhanusa">Dhanusa</option>
										 	<option value="Dholkha">Dholkha</option>
										 	<option value="Dolpa">Dolpa</option>
										 	<option value="Doti">Doti</option>
										 	<option value="Gorkha">Gorkha</option>
										 	<option value="Gulmi">Gulmi</option>
										 	<option value="Humla">Humla</option>
										 	<option value="Ilam">Ilam</option>
										 	<option value="Jajarkot">Jajarkot</option>
										 	<option value="Jhapa">Jhapa</option>
										 	<option value="Jumla">Jumla</option>
										 	<option value="Kailali">Kailali</option>
										 	<option value="Kalikot">Kalikot</option>
										 	<option value="Kanchanpur">Kanchanpur</option>
										 	<option value="Kapilvastu">Kapilvastu</option>
										 	<option value="Kaski">Kaski</option>
										 	<option value="Kathmandu">Kathmandu</option>
										 	<option value="Kavrepalanchok">Kavrepalanchok</option>
										 	<option value="Khotang">Khotang</option>
										 	<option value="Lalitpur">Lalitpur</option>
										 	<option value="Lamjung">Lamjung</option>
										 	<option value="Mahottari">Mahottari</option>
										 	<option value="Makwanpur">Makwanpur</option>
										 	<option value="Manang">Manang</option>
										 	<option value="Morang">Morang</option>
										 	<option value="Mugu">Mugu</option>
										 	<option value="Mustang">Mustang</option>
										 	<option value="Myagdi">Myagdi</option>
										 	<option value="Nawalparasi">Nawalparasi</option>
										 	<option value="Nuwakot">Nuwakot</option>
										 	<option value="Okhaldhunga">Okhaldhunga</option>
										 	<option value="Palpa">Palpa</option>
										 	<option value="Panchthar">Panchthar</option>
										 	<option value="Parbat">Parbat</option>
										 	<option value="Parsa">Parsa</option>
										 	<option value="Pyuthan">Pyuthan</option>
										 	<option value="Ramechhap">Ramechhap</option>
										 	<option value="Rasuwa">Rasuwa</option>
										 	<option value="Rautahat">Rautahat</option>
										 	<option value="Rolpa">Rolpa</option>
										 	<option value="Rukum">Rukum</option>
										 	<option value="Rupandehi">Rupandehi</option>
										 	<option value="Salyan">Salyan</option>
										 	<option value="Sankhuwasabha">Sankhuwasabha</option>
										 	<option value="Saptari">Saptari</option>
										 	<option value="Sarlahi">Sarlahi</option>
										 	<option value="Sindhuli">Sindhuli</option>
										 	<option value="Sindhupalchok">Sindhupalchok</option>
										 	<option value="Siraha">Siraha</option>
										 	<option value="Solukhumbu">Solukhumbu</option>
										 	<option value="Sunsari">Sunsari</option>
										 	<option value="Surkhet">Surkhet</option>
										 	<option value="Syangja">Syangja</option>
										 	<option value="Tanahu">Tanahu</option>
										 	<option value="Taplejung">Taplejung</option>
										 	<option value="Terhathum">Terhathum</option>
										 	<option value="Udayapur">Udayapur</option>
									 	
									 	</select><i class="fa fa-spinner fa-spin spinner" style="display: none;"></i>
							        </div>
							    </form>
								      
							</li>

							<li class="centered filter-option">
								<h6>Data By</h6>
								<a href="http://kathmandulivinglabs.org/earthquake/" target="_blank"><img src="assets/img/logo-kll.png"  width="100"></a>
							</li>
							<li class="centered filter-option">
								<h6>Managed By</h6>
								<a href="http://parakhi.com.np" target="_blank"><img src="assets/img/parakhilogo.png"  width="100"></a>
										
							</li>
													
							<li class="site-footer filter-option">
								<p><a href="/">Home</a> | <a href="/contact">Contact</a> | <a href="#">Map</a> </p>
							</li>
						</ul>
					    <ul class="nav navbar-nav navbar-right">
				        	<li><a href="maps.html">Maps</a></li>
				        </ul>
				    
				  	</div>
				  
				</nav>
			</script>
			
			<div id="filter">

			</div>
		</div>

		<!-- END OF FLOATBOXFILTER -->

		<div class="col-md-6 site">
				
				
			<div class="box-title">
				<h2><b>QuakeHelp 2015</b> - #NepQuake</h2>
			</div><!-- site top -->

			<!-- POST-BLOCK STARTS -->
			<div class="post-block">
				<a class="clickablepost" href="#"  data-toggle="modal" data-target="#modal-data1">
					<div class="post">
						<h4>Need of Food Supplies. Tents, Medical Service in villages in Gorkha</h4>
						<small>
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Gorkha, Gandaki, Western Region, Nepal
						</small>
						<br>
						<small>
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30 Apr 2015, 5:00 pm
						</small>
											
										
					</div>
				</a>
					
				<div class="modal fade" id="modal-data1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4> quake details.</h4>
							</div>
							<div class="modal-body">
							<p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 980884556</p>
							<iframe src="https://www.google.com/maps/api/js/widget?pb=!1m2!1u20!2s10!2sen-US#0-162" frameborder="0" allowtransparency="true" scrolling="no" style="border: 0px; overflow: hidden; height: 100%; width: 100%;"></iframe>
							<p><small>
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Gorkha, Gandaki, Western Region, Nepal
							</small>
							<br>
							<small>
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30 Apr 2015, 5:00 pm
							</small>
							<br>
							<small>
								<span class="glyphicon glyphicon glyphicon-tags" aria-hidden="true"></span>  Medical Facility, Camp, Medical Evacuation, Medical Assiatance, Food/Water/Shelter, Food/Water, Medical Team, Food, Water and Sanitation, Shelter, Other, Rescue
							</small></p>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<!-- END OF POST BLOCK -->		

			<!-- POST-BLOCK STARTS -->
			<div class="post-block">
				<a class="clickablepost" href="#"  data-toggle="modal" data-target="#modal-data1">
					<div class="post">
						<h4>Urgent need for doctors in Melamchi</h4>
						<small>
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Melamchi, Bagmati, Central Region, Nepal
						</small>
						<br>
						<small>
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30 Apr 2015, 5:00 pm
						</small>				
										
					</div>
				</a>
					
				<div class="modal fade" id="modal-data1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4> quake details.</h4>
							</div>
							<div class="modal-body">
							<p>hello this is content 1</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<!-- END OF POST BLOCK -->		

			<!-- POST-BLOCK STARTS -->
			<div class="post-block">
				<a class="clickablepost" href="#"  data-toggle="modal" data-target="#modal-data1">
					<div class="post">
						<h4>Requirement for relief at Rasuwa</h4>
							<small>
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Rasuwa, Sagarmatha, Eastern Region, Nepal, 56300
							</small>
							<br>
							<small>
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span> 30 Apr 2015, 5:00 pm
							</small>				
										
					</div>
				</a>
					
				<div class="modal fade" id="modal-data1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4> quake details.</h4>
							</div>
							<div class="modal-body">
							<p>hello this is content 1</p>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<!-- END OF POST BLOCK -->		

		</div><!-- /col-md-6 -->

		<div class="col-md-3 tweetbox">
			<a class="twitter-timeline" href="https://twitter.com/search?q=%23nepalQuake%20OR%20%23EarthquakeNepal%20OR%20%23NepalEarthquake" data-widget-id="594451247190528000">Tweets about #nepalQuake</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>


	</div><!-- --/row ---->
	</div><!-- --/container ---->
		        

        
<!-- ****************************************************************************************************************************************
FOOTER
********************************************************************************************************************************************* -->        
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/script/handlebars-v3.0.3.js"></script>
    <script type="text/javascript" src="assets/script/script.js"></script>
    
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/bg01.jpg", {speed: 500});
    </script>
  
</body></html>