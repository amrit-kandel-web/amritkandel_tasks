<?PHP include "header.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['bdate'];
$color = $_POST['color'];
echo "<h3> Your name is $fname $lname /. your favourite color is $color and your date of birth is $dob </h3>";

?>

<?PHP include "footer.php" ?>