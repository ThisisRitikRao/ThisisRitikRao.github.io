<?php
include "dbConn.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $fullname = $_POST['inputName4'];
    $email = $_POST['inputEmail4'];
    $message = $_POST['inputMessage'];

    $insert = mysqli_query($db,"INSERT INTO `tblemp`(`inputName4`, `inputEmail4`, `inputMessage`) VALUES ('$fullname','$email','$message')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>