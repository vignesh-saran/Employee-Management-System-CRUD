<?php
// error_reporting(0);  // used for not getting any warning

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// $conn = new mysqli($servername, $username, $password, $dbname); // other methode to connect

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['insert'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $job = $_POST['job'];
    $bank_no = $_POST['bank_no'];
    $date_joining = $_POST['date_joining'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    

    $query= "INSERT INTO employees(name, email, phone, job, bank_no, date_joining, salary, gender)
            VALUES ('$name', '$email', '$phone', '$job', '$bank_no', '$date_joining', '$salary', '$gender')";

    $data = mysqli_query($conn,$query);
    if ($data) {
        echo "<script>window.location.href = 'display.php';</script>";
    }
      
    else {
        echo "Failed".mysqli_connect_error();
    }

}

?>
