<?php 
	session_start();
	include 'function.php';
	if (isset($_POST['login'])) {
		$_SESSION['login'] = htmlentities($_POST['login']);
	}
	$_SESSION['pageNow'] = 'index.php';
	function Login(){
		if (isset($_SESSION['login'])) {
			echo "<form method='post' action='views/LogOut.php'><span>Bonjour ".$_SESSION['login']." </h4></span><button class='btn btn-info'>Déconnection</button></form>";
		}else{
			echo '<form method="post" action="index.php"><span><label>login :</label>
				<input type="" name="login" size="10"></span>
				<span><label>mdp :</label>
				<input type="" name="admin" size="10"></span>
				<button type="submit" class="btn btn-login">Se connecter</button></form>';
		}
	}
 ?>