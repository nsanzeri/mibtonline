<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Function
// require_once 'filter.fn.php';
// require_once 'product.fn.php';
// require_once 'admin.fn.php';
require_once 'access.fn.php';
// Includes
require_once 'connect.inc.php';
require_once 'index.inc.php';
// require_once 'head.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

  <?php require_once 'header.inc.php'; ?>
  

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <?php require_once 'menu.inc.php'; ?>
        </div>
    </nav>
  <body>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Membership
        <small>Pricing</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Pricing</li>
      </ol>

    <html>
<head>
<script>
function showRSS(str) {
  if (str.length==0) { 
    document.getElementById("rssOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("rssOutput").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getrss.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<form>
<select onchange="showRSS(this.value)">
<option value="">Select an RSS-feed:</option>
<option value="Google">Google News</option>
<option value="ZDN">ZDNet News</option>
</select>
</form>
<br>
<div id="rssOutput">RSS-feed will be listed here...</div>
</body>
</html>
          </div>
        </div>
     
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
      </div>
      <!-- /.row -->

      
    </div>
    <!-- /.container -->

    <?php require_once 'footer.inc.php'; ?>

  </body>

</html>