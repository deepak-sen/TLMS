
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><nav class="navbar navbar-default">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <img src="images/dofe-logo.png" alt="DoFE">
	</div>
	<div id="navbar" class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
				
	  </ul>
	  <?php if(!empty($_SESSION["userid"])) { ?>
	  <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="">Welcome, <?php echo $_SESSION["name"]; ?></a></li>
		&nbsp&nbsp&nbsp<li>  <a href="logout.php" class="w3-btn w3-red">Logout</a></li>          
	  </ul>
	  <?php } ?>
	</div>
  </div>
</nav>

