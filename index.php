<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>


  <div class="container offset-4 mt-5">
     <div class="row">
        <div class="col-sm-5 mt-5 ">
                 <h3>You Can Log in Here!</h3>
                <form action="login.php" method="post">
                <div class="form-group">
                <label for="">Username:</label>
                <input type="text" name="username" class="form-control" required >
                </div>  

                <div class="form-group">
                <label for="">Password:</label>
                <input type="password" name="password" class="form-control" required>
                </div>  
                <br>
                <input type="submit" class="btn btn-primary form-control btn-block" value="login" id="">
            </form>

        </div>
     </div>  
  </div>
 



</body>
</html>