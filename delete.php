<?php
include("employee.php");

// Ensure $id is defined

    $id = $_GET['id'];


// Check if the form was submitted and the 'delete' button was clicked

    $delete_query = "DELETE FROM employees WHERE id=$id";
    $delete_data = mysqli_query($conn, $delete_query);

    if ($delete_data) {
        echo "Data Deleted Successfully";
        header("Location: display.php");
        exit();
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
    
?>
