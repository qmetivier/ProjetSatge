<?php include 'views/index.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Index</title>
</head>
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<form method='post' action='CreateDoc.php'>
				<button class="btn btn-info">Creer un nouveau doc</button>
			</form>
			</div>
			<div class="col-md-3">
			<form method='post' action='index.php'>
				<button class="btn btn-danger">Rechercher un document</button>
			</form>
			</div>
			<div class="col-md-5 col-md-offset-1">
			<?php login(); ?>
			</div>
		</div>
	</div>
</header>
<body>
<div class="search-div">
 <div class="container">
 	<div class="row">
 		<div class="col-md-5 ">
 			<input type="" name="" size="50" height="50" class="search">
 			<button class="search-button btn-info search">Search</button>
 		</div>
 		<div class="col-md-5 col-md-offset-2">
 			<form method='post' action='index.php' name="formu"><select class="btn-info btn" name="liste">
 				<option type="default">---Parametres de recherche---<br></option>
 				<option class="option" value="Name" >Name</option>
 				<option class="option" value="Date" >Date</option>
 			</select></form>
 		</div>
 	</div>
 </div>
</div>
<div class="container">
	<div class="search-result">
		
	</div>
</div>
</body>
<footer>
	
</footer>
</html>