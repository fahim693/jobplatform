<?php
session_start();
if(isset($_SESSION['user'])!="")
{
    header("Location: index.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $upass = md5(mysqli_real_escape_string($conn,$_POST['pass']));
    $skills=$_POST['skill'];
    $string=implode(", ",$skills);
    
    if(mysqli_query($conn,"INSERT INTO user(userPass,userName,userEmail,userSkills) VALUES('$upass','$uname','$email','$string')"))
    {

?>

<script>alert('successfully registered ');</script>
<?php
    }
    else
    {
?>
<script>alert('error while registering you...');</script>
<?php
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login & Registration System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.js"></script>

        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">

                        <!--                        LOGIN-->

                        <form class="form-horizontal" role="form" method="post" action="login.php?flag=5">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">          
                                    <input type="password" name="pass" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="btn-login" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <center>
            <h2>Registration</h2><hr>
            <div id="login-form">
                <form method="post" class="form-horizontal" role="form">
                    <div class="form-group">
                        <!--                        <label class="control-label col-sm-2" for="email">Full Name:</label>-->
                        <div class="col-sm-12">
                            <input type="text" name="uname" class="form-control" placeholder="Full Name" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="password" name="pass" class="form-control" placeholder="Your Password" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <center><h4>Skills</h4><hr></center>
                        <div class="col-sm-12">
                            <label><input name="skill[]" value="Excellent analytical skills" type="checkbox"> Excellent analytical skills</label>
                            <label><input name="skill[]" value="Cooperative team member" type="checkbox"> Cooperative team member</label>
                            <label><input name="skill[]" value="Outstanding interpersonal skills" type="checkbox"> Outstanding interpersonal skills</label>
                            <label><input name="skill[]" value="Computer proficient" type="checkbox"> Computer proficient</label>
                            <label><input name="skill[]" value="Extremely organized" type="checkbox"> Extremely organized</label>
                            <label><input name="skill[]" value="Microsoft Office, Excel, PowerPoint proficiency" type="checkbox"> Microsoft Office, Excel, PowerPoint proficiency</label>
                            <label><input name="skill[]" value="Quick learner" type="checkbox"> Quick learner</label>
                            <label><input name="skill[]" value="Strong verbal communication" type="checkbox"> Strong verbal communication</label>
                            <label><input name="skill[]" value="Energetic and organized" type="checkbox"> Energetic and organized</label>
                            <label><input name="skill[]" value="Issue resolution" type="checkbox"> Issue resolution</label>
                            <label><input name="skill[]" value="Communication" type="checkbox"> Communication</label>
                            <label><input name="skill[]" value="Technology" type="checkbox"> Technology</label>
                            <label><input name="skill[]" value="Engineering" type="checkbox"> Engineering</label>
                            <label><input name="skill[]" value="Programming" type="checkbox"> Programming</label>
                            <label><input name="skill[]" value="Leadership Management" type="checkbox"> Leadership Management</label>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <button type="submit" name="btn-signup" class="btn btn-default">Register</button>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <a href="#" data-toggle="modal" data-target="#myModal"><button type="submit" name="btn-signup" class="btn btn-default">Sign me in</button></a>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <a href="index.php"><button type="submit" name="btn-signup" class="btn btn-default">Go Home</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </center>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>