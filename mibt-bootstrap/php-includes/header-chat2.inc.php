
<head>

<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>MIBT Online</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/modern-business.css" rel="stylesheet" />
<link href="css/login.css" rel="stylesheet" />
<link rel="stylesheet" href="chat/style.css" type="text/css" />
<link rel="stylesheet" href="vendor/jquery/jquery-ui.min.css" />


<script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="vendor/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="chat/chat.js"></script>
<script type="text/javascript">
//ask user for name with popup prompt    
var name = prompt("Enter your chat name:", "Guest");

// default name is 'Guest'
if (!name || name === ' ') {
   name = "Guest";	
}

    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
    	
    		 chat.getState(); 
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
    			  
                    var text = $(this).val();
    				var maxLength = $(this).attr("maxlength");  
                    var length = text.length; 
                     
                    // send 
                    if (length <= maxLength + 1) { 
                     
    			        chat.send(text, name);	
    			        $(this).val("");
    			        
                    } else {
                    
    					$(this).val(text.substring(0, maxLength));
    					
    				}	
    				
    				
    			  }
             });



  			//Chat pop-up
     	    var dialog;
     	    dialog = $( "#dialog" ).dialog({
     	      autoOpen: false,
     	      height: 440,
     	      width: 415
     	    });
     	 
     	    $( "#create-user" ).button().on( "click", function() {
     	      dialog.dialog( "open" );
     	    });
    	});
  	  </script>

</head>
