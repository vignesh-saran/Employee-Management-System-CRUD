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
        <h1><span>E</span>mployee Management</h1>
    </div>
    <form id="employeeForm" method="post" action="display.php" onsubmit="return updateEmployee()">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Your Name" name="name" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="xyz@gmail.com" name="email" required>
        </div>
        <div class="form-group">
            <label>Phone:</label>
            <input type="text" class="form-control" placeholder="Your phone number" name="phone" required>
        </div>
        <div class="form-group">
            <label>Job:</label>
            <input type="text" class="form-control" placeholder="Your job role" name="job" required>
        </div>
        <div class="form-group">
            <label>Date of Joining:</label>
            <input type="date" class="form-control" placeholder="Your date of joining" name="date_joining" required>
        </div>
        <div class="form-group">
            <label>Bank Number:</label>
            <input type="text" class="form-control" placeholder="Your Bank Account Number - 20 digit" name="bank_no" required>
        </div>
        <div class="form-group">
            <label>Salary:</label>
            <input type="number" step="0.1" class="form-control" placeholder="Your Salary" name="salary" required>
        </div>
        <div class="form-group">
            <label>Gender:</label>
            <select class="form-control" name="gender" placeholder="Your Gender" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <input type="checkbox" required>
            <p>Agree to terms and conditions</p>   
        </div>
        <div>
            <input type="submit" class="btn btn-success" value="Submit" name="insert">
        </div>
    </form>
</div>
<script src="script.js"></script>
</body>
</html>
