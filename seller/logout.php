<?PHP
session_start();
unset($_SESSION['username']);
unset($_SESSION['sellerid']);
session_destroy();
header('location:sellerlogin.php');
?>