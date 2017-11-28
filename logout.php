<?PHP
session_start();
unset($_SESSION['username']);
unset($_SESSION['buyerid']);
session_destroy();
header('location:home.php');
?>