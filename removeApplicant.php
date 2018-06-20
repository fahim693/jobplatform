<?php
include "dbconnect.php";

$query="delete from jobApplication where applicationId='".$_GET['id']."'";

mysqli_query($conn,$query);
header('Location: jobApproval.php');
?>
