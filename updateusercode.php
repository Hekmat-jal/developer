

<?php 
  require_once("includes/DB.php");

  $users_id = $_GET['id'];
  

    $username = mysqli_real_escape_string($Connection,$_POST['username']);
    $password = mysqli_real_escape_string($Connection,$_POST['password']);
    $date = mysqli_real_escape_string($Connection,$_POST['dates']);

$query = "UPDATE users set username='$username', password='$password', addedDate = '$date' where users_id='$users_id' ";

$result = mysqli_query($Connection,$query);
if($result){


      header("Location: admins.php");

}





  



?>