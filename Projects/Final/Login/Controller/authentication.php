<?php
/**
 * Author: Joshua Callahan
 * u0691598
 * Spring 2016
 */
 
// This function will return only if the current user is logged in, using the specified
// role (if $role is nonempty).
function verifyLogin () {
	
	// Redirect to HTTPS
	redirectToHTTPS();
	
	// Perhaps the user is already logged in
	if (isset($_SESSION['username'])) {
        return $_SESSION['userID'];      
	}
	
	// Empty error message
	$message = '';
	// User is attempting to log in.  Verify credentials.
	if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		try {
			    $db = new PDO("mysql:host=localhost;dbname=Island_Cars;charset=utf8", "root", "200337226");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

			// Get the information about the user.  This includes the
			// hashed password, which will be prefixed with the salt.
			$statement = $db->prepare("SELECT * FROM Users where UserName = '$username'");
			
			$statement->execute();
			
			// Was this a real user?
			if ($row = $statement->fetch()) {

				// Validate the password
				$hashword = $row['Password'];
				//if (strpos(crypt($password, $hashword), $hashword)) {
			    if ($hashword == $password) {
					$_SESSION['username'] = $row['UserName'];
					$_SESSION['userID'] = 
						htmlspecialchars($row['userID']);
				}
				else {
					echo "Password incorrect: " . $hashword . " " . crypt($password, $hashword) ;
                    require 'Login/View/failed_login.php';
					exit();
				}
			}
			else {
				echo "No username found";
                require 'Login/View/failed_login.php';
				exit();
			}
		}
		catch (PDOException $exception) {
            require "Login/View/failed_login.php";
			exit();
		}
		
		// We're logged in, so change session ID.  If the session ID was
		// stolen before we switched to HTTPS, it will do no good now.
		changeSessionID();
		return;                                  // Right role

	}
	else {
		require 'Login/View/mainpage.php';
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