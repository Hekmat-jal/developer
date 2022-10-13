


<?php
 require_once("includes/DB.php");


        $username = mysqli_real_escape_string($Connection,$_POST['admin_name']);
        $password = mysqli_real_escape_string($Connection,$_POST['admin_password']);
        $date = mysqli_real_escape_string($Connection,$_POST['dates']);
        $images = $_FILES['images']['name'];
        $target ='upload/'.basename($_FILES['images']['name']);
        $query = "INSERT INTO admins(admin_name,admin_password,images,addedData) values('$username','$password','$images','$date')";
        move_uploaded_file($_FILES['images']['tmp_name'],$target);
        $result = mysqli_query($Connection,$query);
       
        if($result){
            
            header("Location: admins.php ");
        }
        else{
            header("Location: AddUsers.php");
        }






?>