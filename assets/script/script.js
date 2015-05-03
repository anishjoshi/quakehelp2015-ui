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
		if(category==null){
			$('.'+district).show();
		}else {
			$('.'+district+'.catid-'+category).show();
		}
		
	});

	$(document).on('change', "#catfilter", function() {
		console.log('called'+district);
		category = $(this).val();
		$(".clickablepost").hide();
		if(district == null){
			$('.catid-'+category).show();
		}else {
			console.log('.'+district+'.catid-'+category);
			$('.'+district+'.catid-'+category).show();
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
				    $(".spinner").hide();
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