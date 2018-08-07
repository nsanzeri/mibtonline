<?php
set_include_path('./php-includes' . PATH_SEPARATOR . './php-functions');

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
			<!-- Intro Content -->
			<div class="row">
				<div class="col-lg-6">
					<img class="img-fluid rounded mb-4" src="images/live.jpg" alt="">
				</div>
				<div class="col-lg-6">
					<h2>Live Training</h2>
					<p>Welcome to MIBT Online Live Training. Click the "Open Chat" button to use the live chat. This feature can be turned off at anytime</p>
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
