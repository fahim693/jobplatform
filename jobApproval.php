<?php
include "dbconnect.php";

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.js"></script>

        <style>
            table{
                width:100%;
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
        <table class="table">
            <tr class="danger">
                <th>Name</th>
                <th>Email</th>
                <th>Skills</th>
                <th>Title</th>
                <th>Company</th>
                <th>Time</th>
            </tr>
            <?php
            $query="select * from jobApplication";

            $run=mysqli_query($conn,$query);

            while($row=mysqli_fetch_assoc($run)){ ?>

            <tr class="success">
                <td><?php echo $row['applicantName']?></td>
                <td><?php echo $row['applicantEmail']?></td>
                <td><?php echo $row['skills']?></td>
                <td><?php echo $row['appliedJobTitle']?></td>
                <td><?php echo $row['appliedJobCompany']?></td>
                <td><?php echo $row['appliedDate']?></td>
                <td><a href="removeApplicant.php?id=<?php echo $row['applicationId']?>"><button class="btn btn-primary btn-md" type="submit">Delete</button></a></td>
            </tr>
            <?php   
                                                }
            ?>
        </table>

        <br><br>


    </body>
</html>