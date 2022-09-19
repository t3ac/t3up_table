jQuery(document).ready(function($) {
      
    // start the tablesorter plugin **************************************************************
    
    var $tabe = $('table');
    
    
	if ($tabe.length) { // if there is at least one :)
		
	    $("table").tablesorter({
	        sortList : [[], []] 
	    });
	      
		 $("tr").slice(1).click(function(){
			    $(".marked").removeClass("marked");
			    $(this).addClass("marked");
		 });
	    
     }
  
});
