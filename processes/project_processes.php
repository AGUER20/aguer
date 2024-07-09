<?php
// projectInsert.php
require_once "../config/dbConnect.php";

if (isset($_POST["submit"])) {
    $projectname = mysqli_real_escape_string($dbConn, $_POST["projectname"]);
    $description = mysqli_real_escape_string($dbConn, $_POST["description"]);
    
    // Ensure the 'price' field is set and handle the undefined array key
   

    // Correct the SQL syntax error
    $insertProject = "
    INSERT INTO projects (projectname, description) 
    VALUES ('$projectname', '$description')";

    if ($dbConn->query($insertProject) === TRUE) {
        echo "New project record created successfully";
        header("Location: ../services.php"); // Redirect to a different page
        exit();
    } else {
        die("Failed to insert the new project record: " . $dbConn->error);
    }
}
?>
