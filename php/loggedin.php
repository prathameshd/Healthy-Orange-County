<?php include '../controllers/authController.php'?>

<?php if ($_SESSION['role'] == 'admin'):
	header('location: ../html/admin.html');
      else:
	header('location: ../html/user.html');
      endif;
?>
