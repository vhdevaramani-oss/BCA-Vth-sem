<!DOCTYPE html>
<html>
<body>
<form method="post">
Enter Date of Birth:
<input type="date" name="dob" required>
<input type="submit" value="calculate Age">
</form>
<?php
if(isset($_POST['dob'])){
$dob=new
DateTime($_POST['dob']);
$today=new DateTime();
$age=$dob->diff($today);
echo "<h3>Your Age is:".$age->y."years and". $age->m." months</h3>";
}
?>
</body>
</html>