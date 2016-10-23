<?php 
ini_set('display_errors', 1);
// connection and query logic
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Simple Film By ID</title>
          <link href="css/bootstrap.min.css" rel="stylesheet">
          <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
   	   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
  		<ul class="nav navbar-nav">
        	<li><a href="select-single.php">One Result</a></li>
            <li><a href="select-multiple.php">Mulitple Results</a></li>
			<li><a href="prepare-single.php">Prepare One Result</a></li>
            <li><a href="prepare-multiple.php">Prepare Multi Results</a></li>
  		</ul>
      </div>
  </div>
  </nav>
      <div class="page-header">
        <h1>SELECT Query <small>Using LIKE</small></h1>
      </div>
    <div class="row">
        <div class="col-md-12">
        <ul>
			<?php
            // while loop
			?>
</ul>
        </div>
    </div>
</div>
<footer>
      <div class="container">
        <p class="text-muted">&copy 2016 mustbebuilt.co.uk</p>
      </div>
</footer>
</body>
</html>