<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-press'])){
    $title=mysqli_real_escape_string($conn, $_POST['title']);
    $desc=mysqli_real_escape_string($conn, $_POST['description']);
    $cat=mysqli_real_escape_string($conn, $_POST['category']);
    $country=mysqli_real_escape_string($conn, $_POST['country']);
    $comp=mysqli_real_escape_string($conn, $_POST['company']);


    $query=mysqli_query($conn,"insert into jobs(jobTitle,jobDescription,jobCategory,jobLocation,jobCompany) values('$title','$desc','$cat','$country','$comp')");?>

<div style="text-align:center;font-size:26px" class="alert alert-warning">
    <strong>Successfully Added!!</strong> 
</div>
<?php
    header("refresh:1.5; url=admin.php" );
}
?>
<html>
    <head>
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.js"></script>


        <style>
            form{
                /*                margin: auto;*/
                position: relative;
                margin-left: 20%;
                margin-right: 20%;
                margin-top: 25px;
            }#header{
                padding: 2%;
                background-color: black;
                color: white;
                text-align: center;
            }
            #buttons{
                padding: 1%;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <a href="admin.php">
            <div id="header">
                <h1>Admin Page</h1>
            </div>
        </a>
        <div id="buttons">
            <a href="addJob.php" class="btn btn-info" role="button">Add new job</a>
            <a href="jobApproval.php" class="btn btn-info" role="button">Job Applicants</a>
            <a href="logout.php" class="btn btn-info" role="button">Logout</a>
        </div>
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="JobTitle">
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="5" id="description" name="description" placeholder="Job Description"></textarea>
            </div>
            <div class="form-group">
                <!--                <label>Job Category:</label>-->
                <select class="form-control form-control-lg" name="category">

                    <?php
                    $query="select * from category";

                    $run=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_assoc($run)){ 
                    ?>
                    <option>
                        <?php echo $row['categoryName'];?>
                    </option>    <?php
                    }
                    ?>                    
                </select>

            </div>

            <div class="form-group">
                <!--                <label>Job Location:</label>-->
                <select class="form-control form-control-lg" name="country">

                    <?php
                    $query="select * from country";

                    $run=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_assoc($run)){ 
                    ?>
                    <option>
                        <?php echo $row['countryName'];?>
                    </option> <?php   
                    }
                    ?>                    
                </select>

            </div>

            <div class="form-group">
                <!--                <label>Company:</label>-->
                <input type="text" class="form-control" id="company" name="company" placeholder="Company">
            </div>


            <button type="submit" class="btn btn-default" name="btn-press">Submit</button>
        </form>
    </body>
</html>