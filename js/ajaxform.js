$(document).ready(function(){
	
		$( "#myForm" ).submit(function( event ) {
		  event.preventDefault(); //this prevents default behaviour of form redirecting to new page
		
		  var targetForm = $(this); 

	$.ajax({
	  method: targetForm.attr("method"),
	  url: targetForm.attr("action"),
	  data: targetForm.serialize()//{ name: "John", location: "Boston" }
	})
	  .done(function( response ) {
	    $("#formresult").html(response);
	    targetForm.hide();
	    setTimeout(function(){
	        $("#formresult").html("");
	    	targetForm.show();
	    }, 2000);
	  });
	
	});
 });