<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Maps</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
      .navbar {
      	margin-bottom: 0px;
      }
      .navbar-brand {
		  padding: 12px 15px;
		}
      .loader{
				display: none;
				margin-left: 10px;
			}
		.glyphicon-refresh-animate {
		    -animation: spin .7s infinite linear;
		    -webkit-animation: spin2 .7s infinite linear;
		}

		@-webkit-keyframes spin2 {
		    from { -webkit-transform: rotate(0deg);}
		    to { -webkit-transform: rotate(360deg);}
		}

		@keyframes spin {
		    from { transform: scale(1) rotate(0deg);}
		    to { transform: scale(1) rotate(360deg);}
		}
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/script/handlebars-v3.0.3.js"></script>

    <script>
    	var apiurl = "http://parakhi.com.np/api"
		$(document).ready(function(){
			console.log("ready");
			$.get(apiurl+"?task=categories", function(data, status){
				var categories = data.payload;
				console.log(data.payload);	
				var source = $('#data-filter').html();
			    var template = Handlebars.compile(source);
			    var context = categories;
			    $('#filter').html(template(context));
			});
		});
		function initialize() {
		  var myLatlng = new google.maps.LatLng(27.7000,85.3333);
		  var mapOptions = {
		    zoom: 9,
		    center: myLatlng
		  }
		  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
		  var infowindow = new google.maps.InfoWindow();
		  var gmarkers = [];
		$(document).on('change', "#catfilter", function() {
				$(".loader").show();
				var catid = $(this).val();
			    $.get(apiurl+"?task=incidents&by=catid&id="+$(this).val(), function(data, status){
				var incidents = data.payload.incidents;
				console.log(incidents);
				for(i=0; i<gmarkers.length; i++){
			        gmarkers[i].setMap(null);
			    }
				for(var i =0; i< incidents.length; i++){
				   	  marker = new google.maps.Marker({
				        position: new google.maps.LatLng(incidents[i].incident.locationlatitude,incidents[i].incident.locationlongitude),
				        map: map
				      });
				   	  gmarkers.push(marker);
				      google.maps.event.addListener(marker, 'click', (function(marker,incidentobj) {
				        return function() {
				          infowindow.setContent("<b>"+incidentobj.incident.incidenttitle+"</b><br><br>"+incidentobj.incident.incidentdescription+"<br><br> Contact : "+incidentobj.customfields[2].field_response);
				          infowindow.open(map, marker);
				        }
				      })(marker,incidents[i]));
				 }
				 $(".loader").hide();
			});
		});
		  // var marker, i;
		  //  	  marker = new google.maps.Marker({
		  //       position: new google.maps.LatLng(-25.363882,131.044922),
		  //       map: map
		  //     });
		  //     google.maps.event.addListener(marker, 'click', (function(marker, i) {
		  //       return function() {
		  //         infowindow.setContent("<b>a</b><br><br><br>a");
		  //         infowindow.open(map, marker);
		  //       }
		  //     })(marker, 1));
		}
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
  	<script id="data-filter" type="text/x-handlebars-template">
  		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      	<!-- <a class="navbar-brand" href="#">Help</a> -->
		      	<a class="navbar-brand" href="#"><img src="../assets/img/help.png"></a>

		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          	<select id="catfilter" class="form-control">
			 			<option value="" >choose</option>
				 		{{#each categories}}
				 			<option value="{{category.id}}">{{category.title}}</option>
				 	
				 		{{/each}}
			 		</select><span class="loader"><i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i></span>
		        </div>
		      </form>
		    </div>
		  </div>
		</nav>
	</script>
	<div id="filter"></div>
    <div id="map-canvas"></div>
  </body>
</html>