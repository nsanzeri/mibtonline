        <a class="navbar-brand" href="index.php">MIBT Online</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<div class="collapse navbar-collapse" id="navbarResponsive">
	<ul class="navbar-nav ml-auto">
	<li class="nav-item">
		<a class="nav-link" href="about.php">About</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="contact.php">Contact</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="bill-lemonnier.php">Bill LeMonnier</a>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Live
		</a>
		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
		<a class="dropdown-item" href="live-training.php">Live Training</a>
		<a class="dropdown-item" href="#">Archive</a>
		</div>
	</li>
<!-- 	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Other Pages
		</a>
		<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
			<a class="dropdown-item" href="full-width.php">Full Width Page</a>
		</div>
	</li>
 -->
 	<?php if (isset($_SESSION['login_user'])) {?>
			<li class="nav-item">
				<a class="nav-link" href="subscribe.php">Subscribe</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href='index.php?logout=true'>Logout</a>
			</li>
	<?php } else { ?>
			<li class="nav-item">
				<a class="nav-link" href="login.php">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="signup.php">Signup</a>
			</li>
	<?php } ?>
	</ul>
</div>