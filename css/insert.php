<?php
include 'connect.php';
if(isset($_POST['submit']))
{
    $Employees = $_POST['Employees'];
    $Salary = $_POST['Salary'];
    $DOB = $_POST['DOB'];

    $sql = "INSERT INTO apalife (Employees, Salary, DOB)
VALUES ('$Employees', '$Salary', '$DOB')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>