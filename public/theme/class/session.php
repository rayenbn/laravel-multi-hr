 <?php session_start();
if (empty($_SESSION['usr_username']))
{
header("location:login.php");
}

 ?>