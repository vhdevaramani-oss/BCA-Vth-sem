 <html> 
 <head> 
 <title>Student Registration</title> 
 </head> 
<body> 
<h2>Student Registration Form</h2> 
<form method="POST"> 
 Name: 
<input type="text" name="name" 
value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"> 
<br><br> 
Email: 
<input type="email" name="email" 
value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"> 
<br><br> 
Phone: 
<input type="text" name="phone" 
value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>"> 
<br><br> 
Course: 
<input type="text" name="course" 
value="<?php echo htmlspecialchars($_POST['course'] ?? ''); ?>">
  <br><br>
<input type="submit" name="submit" value="Register">
</form>
<?php
  $conn = mysqli_connect("localhost", "root", "", "student_db"); 
 
if (!$conn) { 
die("Database Connection Failed"); 
} 
if (isset($_POST['submit'])) { 
$name = $_POST['name']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$course = $_POST['course']; 
$sql = "INSERT INTO students 
(name, email, phone, course) 
VALUES (?, ?, ?, ?)"; 
$stmt = mysqli_prepare($conn, $sql); 
mysqli_stmt_bind_param($stmt, "ssss", 
$name, $email, $phone, $course); 
if (mysqli_stmt_execute($stmt)) { 
echo "<p>Registration Successful</p>";
} else { 
  echo "Registration Failed"; 
} 
mysqli_stmt_close($stmt); 
} 
mysqli_close($conn); 
?> 
   </body> 
   </html>
