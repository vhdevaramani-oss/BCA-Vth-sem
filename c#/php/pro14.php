           <?php 
 
            $conn = mysqli_connect("localhost", "root", "", "college_db"); 
 
          if (!$conn) { 
           die("Connection Failed: " . mysqli_connect_error()); 
           } 
 
         mysqli_query($conn, "CREATE TABLE IF NOT EXISTS student ( 
         id INT AUTO_INCREMENT PRIMARY KEY, 
          name VARCHAR(50), 
          email VARCHAR(50), 
          phone VARCHAR(15), 
          course VARCHAR(30) 
           )"); 
 
            $message = ""; 
 
            if (isset($_POST['insert'])) { 
 
            $name = $_POST['name']; 
            $email = $_POST['email']; 
            $phone = $_POST['phone']; 
            $course = $_POST['course']; 
 
            $stmt = mysqli_prepare($conn, 
           "INSERT INTO student (name, email, phone, course) 
              VALUES (?, ?, ?, ?)"); 
 
              mysqli_stmt_bind_param($stmt, "ssss", 
                $name, $email, $phone, $course); 
 
              if (mysqli_stmt_execute($stmt)) { 
             $message = "Record Inserted Successfully!";
 
          } else { 
          $message = "Insertion Failed!"; 
            } 
 
           mysqli_stmt_close($stmt); 
          } 
   
           ?> 
 
        <html> 
        <head> 
         <title>Student Records</title> 
         </head> 
         <body> 
 
        <h2>Enter Student Details</h2> 
 
        <form method="POST"> 
 
         Name: 
       <input type="text" name="name" 
         value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required> 
          <br><br> 
 
         Email: 
       <input type="email" name="email" 
        value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required> 
         <br><br> 
 
         Phone: 
      <input type="text" name="phone" 
      value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" required> 
      <br><br> 
 
        Course: 
      <input type="text" name="course" 
       value="<?php echo htmlspecialchars($_POST['course'] ?? ''); ?>" required> 
        <br><br> 
 
        <input type="submit" name="insert" value="Insert"> 
 
         </form> 
 
        <?php 
         if ($message != "") { 
         echo "<h3>$message</h3>"; 
             } 
           ?> 
 
          <h2>Student Records</h2> 
 
     <table border="1" cellpadding="8"> 
 
      <tr> 
       <th>ID</th> 
       <th>Name</th> 
        <th>Email</th> 
        <th>Phone</th> 
        <th>Course</th> 
        </tr> 
 
       <?php 
 
       $result = mysqli_query($conn, "SELECT * FROM student"); 
 
        while ($row = mysqli_fetch_assoc($result)) { 
 
        echo "<tr>"; 
        echo "<td>".$row['id']."</td>"; 
        echo "<td>".htmlspecialchars($row['name'])."</td>"; 
        echo "<td>".htmlspecialchars($row['email'])."</td>"; 
        echo "<td>".htmlspecialchars($row['phone'])."</td>"; 
        echo "<td>".htmlspecialchars($row['course'])."</td>"; 
        echo "</tr>"; 
       } 
 
       mysqli_close($conn); 
 
         ?> 
 
        </table> 
 
        </body> 
        </html>