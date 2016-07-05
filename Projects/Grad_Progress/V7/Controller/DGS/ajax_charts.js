function gpa_data()
{
    $.ajax(
	{
	    type:'POST',
	    url: "gpa_chart.php",
	    data: $('#gpachart'),
	    dataType: "script",  		      // The type of data that is getting returned.

	    /**
	     * What to do before the ajax request is sent. Perhaps gather
	     * page information, prep form, etc.
	     */
	    beforeSend: function()
	    {
            console.log ( "prepping AJAX call with data: ");
	    },
	    
	})
	.done( function ( data )
		 {
		    console.log ( "Finished AJAX call");
		     
		 } )
	.fail( function ( text, options, err )
	       {
		   /**
		    * What to do if there is an error
		    * 
		    */
	    	   // something went wrong
	    	   var jContent = $( "#content" );
	    	   jContent.html( "<h2>Error - Only a programmer can fix this!! </h3>"  );
	    	   console.log('Jim, error message: ' + text );
	    	   console.log('Jim, error message: ' + options );
	    	   console.log('Jim, error message: ' + err);
	       } )
	.always( function ( )
	       {
	       } );
	       


    // if this is associated with a submit button, return false to
    // disable a page submit
    return false;
}

function success_data()
{
    $.ajax(
	{
	    type:'POST',
	    url: "success_chart.php",
	    data: $('#barchart'),
	    dataType: "script",  		      // The type of data that is getting returned.

	    /**
	     * What to do before the ajax request is sent. Perhaps gather
	     * page information, prep form, etc.
	     */
	    beforeSend: function()
	    {
            console.log ( "prepping AJAX call with data: ");
	    },
	    
	})
	.done( function ( data )
		 {
		    console.log ( "Finished AJAX call");
		     
		 } )
	.fail( function ( text, options, err )
	       {
		   /**
		    * What to do if there is an error
		    * 
		    */
	    	   // something went wrong
	    	   var jContent = $( "#content" );
	    	   jContent.html( "<h2>Error - Only a programmer can fix this!! </h3>"  );
	    	   console.log('Jim, error message: ' + text );
	    	   console.log('Jim, error message: ' + options );
	    	   console.log('Jim, error message: ' + err);
	       } )
	.always( function ( )
	       {
	       } );
	       


    // if this is associated with a submit button, return false to
    // disable a page submit
    return false;
}

function advisor_data()
{
    $.ajax(
	{
	    type:'POST',
	    url: "advisor_chart.php",
	    data: $('#piechart'),
	    dataType: "script",  		      // The type of data that is getting returned.

	    /**
	     * What to do before the ajax request is sent. Perhaps gather
	     * page information, prep form, etc.
	     */
	    beforeSend: function()
	    {
            console.log ( "prepping AJAX call with data: ");
	    },
	    
	})
	.done( function ( data )
		 {
		    console.log ( "Finished AJAX call");
		     
		 } )
	.fail( function ( text, options, err )
	       {
		   /**
		    * What to do if there is an error
		    * 
		    */
	    	   // something went wrong
	    	   var jContent = $( "#content" );
	    	   jContent.html( "<h2>Error - Only a programmer can fix this!! </h3>"  );
	    	   console.log('Jim, error message: ' + text );
	    	   console.log('Jim, error message: ' + options );
	    	   console.log('Jim, error message: ' + err);
	       } )
	.always( function ( )
	       {
	       } );
	       


    // if this is associated with a submit button, return false to
    // disable a page submit
    return false;
}