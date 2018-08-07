<?php
set_include_path ( './php-includes' . PATH_SEPARATOR . './php-functions' );

// Includes
require_once 'connect.inc.php';
require_once 'live-training.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

   <?php require_once 'header-chat.inc.php'; ?>

  <body>


	<!-- Navigation -->
	<nav
		class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">

        <?php require_once 'menu.inc.php'; ?>
        </div>
	</nav>

	<!-- Navigation -->
	<nav
		class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">

        <?php require_once 'menu.inc.php'; ?>
        </div>
	</nav>
	<!-- Page Content -->
	<div class="container">
		<h1 class="mt-4 mb-3">
			Live Training <small>MIBT Online</small>
		</h1>
		<!-- Page Heading/Breadcrumbs -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active">Live Training</li>
		</ol>
		<!-- Live Video/ Chat -->
		<div class="row">
			<div class="row">
				<div class="col-md-7">
					<a href="#"> <iframe src="https://player.vimeo.com/video/282786084"
							width="1130" height="720" frameborder="0" allowfullscreen=""></iframe>
					</a>
				</div>
			</div>
			<div class="cotainer">
				<div class="col-lg-4 mb-4">
					<div class="card h-100 text-center">
						<div class="card-body">
							<h4 class="card-title">Live Training</h4>
							<h6 class="card-subtitle mb-2 text-muted"></h6>
							<p class="card-text">Click the button below to view the live chat. You may turn this feature off at anytime.</p>
							<div class="row">
								<div id="page-wrap">
									<p id="name-area"></p>
									<button id="create-user">Open chat</button>
									<div id="dialog" title="Live Chat">
										<div id="chat-wrap">
											<div id="chat-area"></div>
										</div>
										<form id="send-message-area">
											<textarea id="sendie" maxlength='100'></textarea>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<!-- 				<div class="row"> -->
<!-- 					<div class="col-md-7"> -->
<!-- 						<a href="#"> </a> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 				<div class="row"> -->
<!-- 					<div id="page-wrap"> -->
<!-- 						<p id="name-area"></p> -->
<!-- 						<button id="create-user">Open chat</button> -->
<!-- 						<div id="dialog" title="Live Chat"> -->
<!-- 							<div id="chat-wrap"> -->
<!-- 								<div id="chat-area"></div> -->
<!-- 							</div> -->
<!-- 							<form id="send-message-area"> -->
<!-- 								<textarea id="sendie" maxlength='100'></textarea> -->
<!-- 							</form> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
			</div>
			<!-- /.container -->

</body>

</html>
