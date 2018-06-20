<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-login']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $upass = mysqli_real_escape_string($conn,$_POST['pass']);
    if($email=='admin@admin.com' && $upass=='admin'){
        header('Location: admin.php');
    }else{
?>
<script>alert('wrong details');</script>
<?php
    }
}?>

<html>
    <head>
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.js"></script>

        <link rel="stylesheet" href="style.css" type="text/css">
    </head>

    <body>
        <center>
            <h2>Admin Login Page</h2><hr>
            <div id="login-form">
                <form method="post" class="form-horizontal" role="form">          
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">          
                            <input type="password" name="pass" class="form-control" id="pwd" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" name="btn-login" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </body>
</html>

