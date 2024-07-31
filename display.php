<?php 

include("employee.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet"> 
    <script>
        function updateEmployee() {
            return true;
        }
    </script>
</head>
<body>
    
<?php


error_reporting(0);

$query="SELECT * FROM employees";
$data =mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
//echo $total;

$result= mysqli_fetch_assoc($data);



if ($total !=0)
{
 ?>

<div class="title">
        <h1><span>E</span>mployee List</h1>
</div>

<div class="container">
    <table border="3" class="table table-bordered" id="employeeTable">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Job</th>
            <th>Bank Number</th>
            <th>Date of Joining</th>
            <th>Salary</th>
            <th>Gender</th>
            <th>Action</th>
   
    <?php

    while($result= mysqli_fetch_assoc($data))
    {
        echo "<tr>
              <td>" . $result['id'] ."</td>
              <td>" . $result['name'] ."</td>
              <td>" . $result['email'] ."</td>
              <td>" . $result['phone'] ."</td>
              <td>" . $result['job'] . "</td>
              <td>" . $result['bank_no'] . "</td>
              <td>" . $result['date_joining'] ."</td>
              <td>" . $result['salary'] ."</td>
              <td>" . $result['gender'] ."</td>

              <td><a href='update.php?id=$result[id]'><input type='submit' value='Update' class='edit btn btn-primary'></a>
              <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' name='delete'  class='delete btn btn-danger'></a>
              </td>
             
              </tr>";
                                    
    }
}

else
{
    echo "No records found";
}


// echo $result['name']." ".$result['email']." "
        // .$result['phone']." ".$result['job']." ".$result['bank_no']." ".$result['date_joining']
        // ." ".$result['salary']." ".$result['gender']."<br>" ;

?>

</table>

</div>

</body>
</html>


