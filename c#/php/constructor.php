<!DOCTYPE html>
<html>
<head>
    <title>Constructor and Destructor</title>
</head>
<body>

<h2>Student Details</h2>

<form method="post">

    Enter Student Name:
    <input type="text" name="name" required>
    <br><br>

    Enter Student Age:
    <input type="number" name="age" required>
    <br><br>

    Enter Course:
    <input type="text" name="course" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php

class Student
{
    // Constructor
    function __construct($name, $age, $course)
    {
        echo "<h3>Constructor is called</h3>";

        echo "Student Name: " . $name . "<br>";
        echo "Student Age: " . $age . "<br>";
        echo "Student Course: " . $course . "<br><br>";
    }

    // Destructor
    function __destruct()
    {
        echo "<h3>Destructor is called</h3>";
        echo "Student object is destroyed.";
    }
}

// Check whether form is submitted
if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    // Create object and pass user input
    $student = new Student($name, $age, $course);
}

?>

</body>
</html>
```