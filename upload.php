<?php
include "header.php";
?>
<?php
session_start();
if($_SESSION['username']) {
        header("Location: choseimg.php");
} else {
}
#Login script

$postusername = htmlentities($_POST['username']);
$postpassword = htmlentities(md5($_POST['password']));

if (!$postusername || !$postpassword) {
	$loginstatus = "";
}
else {
	require_once"logininfo.php";
	if (isset($postusername)) {
		if ($username == $postusername && $password == $postpassword) {
		session_start();
		$_SESSION['username'] = $username;
		header("Location: ./choseimg.php");
		} else {
			$loginstatus =	"<p class=\"loginStatus\">Incorrect username and/or password.</p>";
		}
	}
}
?>
<body>
					<?php echo "$loginstatus"; ?>

	<div id="conholder">
		<div id="loginbox">
			<div id="front">
				<h1 class="texth1">Login</h1>
				<form class="adform" method="POST" action="upload.php">
					<input class="adinput" type="text" name="username" placeholder="Username">
					<input class="adinput" type="password" name="password" placeholder="Password"></ br></ br/>
					<input class="adsubmit" type="submit" value="Login">
				</form>
			</div>
		</div>		
	</div>
<?php
include "footer.php";
?>
