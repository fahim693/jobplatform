<?php
include "dbconnect.php";
session_start();
$id=$_GET['id'];
?>
<!doctype html>
<html>
    <head>
        <title>Details</title>
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
        <!-- Modal -->
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
                        <form class="form-horizontal" role="form" method="post" action="login.php?flag=0&id=<?php echo $id;?>">
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
                        <a href="adminLogin.php"><button type="button" class="btn btn-default" >Admin Panel</button></a>
                        <a href="Register.php"><button type="button" class="btn btn-default" >Create account</button></a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!--Navigation-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Job Mania</a>
                </div>
                <ul class="nav navbar-nav">
                    <li role="presentation" class="active"><a href="index.php">Home</a></li>
                    <!--                    <li class="active"><a href="#">Home</a></li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li id="loginButton"><a href="#" id="loginButton" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <!--                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                </ul>
            </div>
        </nav>
        <div class="container">
            <?php


            $query="select * from jobs where jobId='$id'";
            $run=mysqli_query($conn,$query);

            while($row=mysqli_fetch_assoc($run)){
            ?>
            <div>
                <h2><?php echo $row['jobCompany'];?></h2>
                <h4><?php echo $row['jobTitle'];?></h4>
                <p><?php echo $row['jobDescription']?></p>
                <p><a href="jobApply.php?id=<?php echo $row['jobId']?>"><button type="subit" class="btn btn-primary btn-md">Apply</button></a></p>
            </div>

            <?php
            } 
            ?>
        </div>

        <footer id="footer" class="footer navbar-fixed-bottom">
            <p>Copyright &copy; 2017</p>
        </footer>

        <?php
        if(!empty($_SESSION)){?>
        <script type='text/javascript'>
            document.getElementById('loginButton').innerHTML="<a href='logout.php?logout=true'>Log Out</a>";
            document.getElementById('resumeBuilder').innerHTML="<a href='resumeBuilder.php?'>Create Resume</a>";
        </script>
        <?php
        }else{?>
        <script type='text/javascript'>
            document.getElementById('resume').innerHTML="<a href='error.php?flag=3'>View Resume</a>";
        </script>
        <?php
        }
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>