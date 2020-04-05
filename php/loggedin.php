<?php include '../php/authController.php'?>

<?php if ($_SESSION['role'] == 'admin'):
	header('location: ../pages/admin.php');
      else:
	header('location: ../pages/user.html');
      endif;
?>
