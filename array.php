<?php include "header.php";?>

<?php 
echo "<h2>Excercise 5.1</h2>";
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo '<ul>';
foreach($courses as $p){
 echo '<li>'.$p.'</li>';
}
echo '</ul>';
?>


<?php
echo "<h2>Excercise 5.3</h2>";
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
$clength = count($courses3);

for($x = 0; $x < $clength; $x++){
    echo $courses3[$x];
    echo "<br>";
}

?>

<?php 
echo "<h2>Excercise 5.2</h2>";
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo"<h4>Array list before removing 3rd element.</h4>";
echo '<ul>';
foreach($courses1 as $p){
 echo '<li>'.$p.'</li>';
}
echo '</ul>';

unset($courses1[2]);
echo"<h4>Array list after 3rd element.</h4>";
echo '<ul>';
foreach($courses1 as $p){
 echo '<li>'.$p.'</li>';
}
echo '</ul>';

?>
<?php include "footer.php"
?>