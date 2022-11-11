<?php



function check_login()
{
	/* Use User Id As Session */
	if ((strlen($_SESSION['login_id']) == 0)) {
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = "../";
		$_SESSION["login_id"] = "";
		header("Location: http://$host$uri/$extra");
	}
}

/* Invoke This Siet */
check_login();
