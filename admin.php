<!doctype html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.js"></script>

        <style>
            #header{
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


    </body>
</html>