<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
 
// This function will return only if the current user is logged in, using the specified
// role (if $role is nonempty).
function verifyLogin ($role) {
	
	// Redirect to HTTPS
	redirectToHTTPS();
	
	// Perhaps the user is already logged in
	if (isset($_SESSION['username'])) {
		
		// Does the user belong to the appropriate role?
		if ($role == '' || (isset($_SESSION['roles']) && in_array($role, $_SESSION['roles']))) {
			return $_SESSION['uid'];            // Logged in, right role
		}
		else {
			/*require 'views/badRole.php';*/       // Logged in, wrong role
			exit();
		}
		
	}
	
	// Empty error message
	$message = '';
	// User is attempting to log in.  Verify credentials.
	if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		try {
			    $db = new PDO("mysql:host=localhost;dbname=Grad_Prog_V5;charset=utf8", "root", "200337226");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

			// Get the information about the user.  This includes the
			// hashed password, which will be prefixed with the salt.
			$statement = $db->prepare("SELECT uid, username, hashword, role FROM users where username = '$username'");
			
			$statement->execute();
			
			// Was this a real user?
			if ($row = $statement->fetch()) {

				// Validate the password
				$hashword = $row['hashword'];
				if (crypt($password, $hashword) == $hashword) {
					$_SESSION['username'] = $row['username'];
					$_SESSION['uid'] = 
						htmlspecialchars($row['uid']);
					$_SESSION['role'] = $row['role'];
				}
				else {
                    require 'View/failed_login.php';
					exit();
				}
			}
			else {
                require 'View/failed_login.php';
				exit();
			}
		}
		catch (PDOException $exception) {
            require "View/failed_login.php";
			exit();
		}
		
		// We're logged in, so change session ID.  If the session ID was
		// stolen before we switched to HTTPS, it will do no good now.
		changeSessionID();
		if ($role == '' || in_array($role, $_SESSION['roles'])) {
			return;                                  // Right role
		}
		else {
			require 'View/mainpage.php';
            exit();
		}
	}
	else {
		require 'View/mainpage.php';
		exit();
	}
}

// Changes the session ID
function changeSessionID () {
  // Ask the browser to delete the existing cookie
  setcookie("PHPSESSID", "", time()-3600, "/");
  // Change the session ID and send it to the browser in a secure cookie
  $server = $_SERVER['SERVER_NAME'];
  $secure = usingHTTPS();
  session_set_cookie_params(0, "/", $server, $secure, true);
  session_regenerate_id(true);
}

// Redirects to HTTPS
function redirectToHTTPS()
{
	if(!usingHTTPS)
	{
		$redirect = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location:$redirect");
		exit();
	}
}
// Reports if https is in use
function usingHTTPS () {
	return isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] != "off");
}

// Generates random salt for blowfish
function makeSalt () {
	$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
	return '$2a$12$' . $salt;
}

?>