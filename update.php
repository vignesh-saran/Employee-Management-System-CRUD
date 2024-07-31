<?php 
include("employee.php");
error_reporting(0); 


    $id = $_GET['id'];


    //echo $_GET['id'];
    
    $query="SELECT * FROM employees WHERE id='$id' ";
    $data =mysqli_query($conn,$query);
    

    $result= mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet"> 

</head>
<body>
<div class="container">
    <div class="title">
        <h1><span>E</span>mployee List Update</h1>
    </div>
  
    <form id="employeeForm" method="post" action="" onsubmit="return updateEmployee()">

        <div class="form-group">
            <label>Name:</label>
            <input type="text" value="<?php echo $result['name']; ?>" class="form-control" placeholder="Your Name" name="name" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" value="<?php echo $result['email']; ?>" placeholder="xyz@gmail.com" name="email" required>
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <input type="text" class="form-control" value="<?php echo $result['phone']; ?>" placeholder="your phone number" name="phone" required>
        </div>
        <div class="form-group">
            <label>Job:</label>
            <input type="text" class="form-control" value="<?php echo $result['job']; ?>" placeholder="Your job role" name="job" required>
        </div>
        <div class="form-group">
            <label>Date of Joining:</label>
            <input type="date" class="form-control" placeholder="Your date of joining" value="<?php echo $result['date_joining']; ?>" name="date_joining" required>
        </div>
        <div class="form-group">
            <label>Bank Number:</label>
            <input type="text" class="form-control" placeholder="Your Bank Account Number - 20 digit" value="<?php echo $result['bank_no']; ?>" name="bank_no" required>
        </div>
        <div class="form-group">
            <label>Salary:</label>
            <input type="number" step="0.01" class="form-control" placeholder="Your Salary" value="<?php echo $result['salary']; ?>" name="salary" required>
        </div>
        <div class="form-group">
            <label>Gender:</label>
            <select class="form-control" name="gender" required>
                <option value="" disabled>Select</option>
                <option value="Male" <?php if ($result['gender'] == "Male") echo "selected"; ?>>Male</option>
                <option value="Female" <?php if ($result['gender'] == "Female") echo "selected"; ?>>Female</option>
                <option value="Other" <?php if ($result['gender'] == "Other") echo "selected"; ?>>Other</option>
            </select>
        </div>
        <div class="form-group">
            <input type="checkbox" required>
            <p>Agree to terms and conditions</p>   
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Update Details" name="update">
        </div>
    </form>
</div>

</body>
</html>


<?php 
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $job = $_POST['job'];
    $bank_no = $_POST['bank_no'];
    $date_joining = $_POST['date_joining'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];

    $update_query = "UPDATE employees SET name='$name', email='$email', phone='$phone', job='$job', date_joining='$date_joining', bank_no='$bank_no', salary='$salary', gender='$gender' WHERE id='$id'";

    $update_data = mysqli_query($conn, $update_query);
    if ($update_data) {
        echo "<script>window.location.href = 'display.php';</script>";
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>
