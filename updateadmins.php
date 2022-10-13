<?php 

   require_once("includes/DB.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
     <!-- <link rel="stylesheet" href="bootstrap/css/AdminStyle.css">  -->
</head>
<body>
    


  
<div class="alert alert-primary mt-3 text-center" role="alert">   
              <h3>Edit Admins Here.... 
              <div class="spinner-grow" role="status">
             <span class="visually-hidden-focusableally-hidden"></span>


            <div> 
</div>
</div>
</div>




<div class="contaienr-fluid">
<div class="row">
 

<div class="col-sm-4 offset-3">
<?php 
   $id = $_GET['id'];
  $query = "SELECT * FROM admins where id='$id'";
  $result = mysqli_query($Connection,$query);
  while($data= mysqli_fetch_assoc($result)){
        
       $id = $data['id'];
       $admin_name = $data['admin_name'];
       $admin_password = $data['admin_password'];
       $images = $data['images'];
       $date = $data['addedData'];
       

?>        

<form action="adminupdatecode.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
             <fieldset>
                <div class="form-group">
                    <label for="" class="">AdminName</label>
                    <input type="text" name="admin_name" value="<?php echo $admin_name; ?>" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" name="admin_password" value="<?php echo $admin_password; ?>" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Image</label>: <br>
                    <img src="upload/<?php echo $images; ?>" widht="150px" height="100px" alt="">
                    <input type="file" name="images"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Added Date</label>
                    <input type="date" name="dates" value="<?php echo $date; ?>" class="form-control">
                </div>

                <br>
             </fieldset>
             <input type="submit" name="submit" class="btn btn-success form-control btn-block" value="Edit Admins">
        </form>
        <br>
        <br>
     <?php } ?>
     </div>  
 