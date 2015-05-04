var apiurl = "http://quakehelp-env.elasticbeanstalk.com/quakeinfo"

$(document).ready(function(){
	console.log("ready");
	getDataFromParam();
	var district = null;
	var category = null;

	$.get("http://parakhi.com.np/api?task=categories", function(data, status){
		var categories = data.payload;

		console.log(data.payload);	

		var source = $('#data-filter').html();
	    var template = Handlebars.compile(source);
	    var context = categories;

	    $('#filter').html(template(context));

	});

	$(document).on('change', "#catfilterplace", function() {
		console.log('called'+category);
		$(".clickablepost").hide();
		district = $(this).val();
		if(district == "All" && (category == null||category == "All")){
			$(".clickablepost").show();
		}else if(district == "All"){
			$('.'+category).show();
		}
		else {
			if(category==null || category == "All"){
				$('.'+district).show();
			}else {
				$('.'+district+'.catid-'+category).show();
			}
		}

		var visiblecontent = $('.clickablepost').filter(function() {
  return $(this).css('display') !== 'none';
}).length;
		if(visiblecontent<1){
			$('.nodata').show();
		}else {
			$('.nodata').hide();
		}
		
	});

	$(document).on('change', "#catfilter", function() {
		console.log('called'+district);
		category = $(this).val();
		if(category == "All" && (district == null||district == "All")){
			$(".clickablepost").show();
		}else if(category == "All"){
			$('.'+district).show();
		}
		else {
			$(".clickablepost").hide();
			if(district == null || district == "All"){
				$('.catid-'+category).show();
			}else {
				console.log('.'+district+'.catid-'+category);
				$('.'+district+'.catid-'+category).show();
			}
		}

		var visiblecontent = $('.clickablepost').filter(function() {
		  return $(this).css('display') !== 'none';
		}).length;
		if(visiblecontent<1){
			$('.nodata').show();
		}else {
			$('.nodata').hide();
		}
		
	    // $("#sharelink").val("http://anishjoshi.github.io/eqhelp/?catid="+catid);


	
	});
	function getDataFromParam() {
		var catid = getParameterByName('catid');
		if(catid != ""){
			console.log("wow");
			$(".spinner").show();
				    $.get(apiurl+"?categoryId="+catid, function(data, status){
					var incidents = data;	

					var source = $('#data-template').html();
				    var template = Handlebars.compile(source);
				    var context = incidents;

				    $('#data-incident').html(template(context));
				    $(".spinner").hide();
				    // $("#sharelink").val("http://anishjoshi.github.io/eqhelp/?catid="+catid);


				});
		}else {
				$.get(apiurl, function(data, status){
					var incidents = data;	

					var source = $('#data-template').html();
				    var template = Handlebars.compile(source);
				    var context = incidents;

				    $('#data-incident').html(template(context));
				    $(".preloader-wrapper").hide();
				    });
		}
	}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

	
});