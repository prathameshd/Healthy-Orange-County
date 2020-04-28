<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/InfoWeb/php/sendEmails.php');
session_start();
$username = "";
$email = "";
$errors = [];

$conn = new mysqli('localhost', 'root', '', 'verifyuser');

// SIGN UP USER
if (isset($_POST['signup-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO users SET username=?, email=?, token=?, password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss', $username, $email, $token, $password);
        $result = $stmt->execute();

        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();

            // TO DO: send verification email to user
             sendVerificationEmail($email, $token);

            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You are logged in!';
            $_SESSION['type'] = 'alert-success';
            if ($_SESSION['role'] == 'admin'):
	        header('location: ../pages/admin.php');
      	    else:
        	header('location: ../pages/user.php');
            endif;

        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}

function isLoggedIn()
{
	if (isset($_SESSION['username'])) {
		return true;
	}else{
		return false;
	}
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	unset($_SESSION['verify']);
	header("location: index.php");
}

function isAdmin()
{
	if (isset($_SESSION['username']) && $_SESSION['role'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

// LOGIN
if (isset($_POST['login-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username or email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM users WHERE username=? OR email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password']) || $password == $user['password']) { // if password matches
                $stmt->close();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
		        $_SESSION['role'] = $user['role'];
                if ($_SESSION['role'] == 'admin'):
 	                header('location: ../pages/admin.php');
        	else:
                	header('location: ../index.php');
                endif;

                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}

// UPDATE 
if (isset($_POST['update-btn'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $query = "UPDATE users SET username=?, email=? WHERE id=$id";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $username, $email);

    $result = $stmt->execute();

    if($result) {
        $stmt->close();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = "User data has been updated!";
        $_SESSION['type'] = "alert-warning";
    } else {
        $_SESSION['message'] = "Database error: Could not update user";
    }
    header('location: ../pages/user.php');
}

function isVerified()
{
        if($_SESSION['verified'] == 1)
                return true;
        else
                return false;
}
