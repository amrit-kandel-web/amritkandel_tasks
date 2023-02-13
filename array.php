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
<h2> 4.change the following arrays all values to upper case.</h2>

<?php
$courses4[0]= "php";
$courses4[1]= "html";
$courses4[2]= "javascript";
$courses4[3]= "cms";
$courses4[4]= "project";
echo strtoupper($courses4[0]);

?>
<br>
<?php
echo strtoupper($courses4[1]);
?>
<br>
<?php
echo strtoupper($courses4[2]);
?>
<br>
<?php
echo strtoupper($courses4[3]);
?>
<br>
<?php
echo strtoupper($courses4[4]);
?>
<br>
<h2>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays) </h2>
<?php
$color = array("Red"=>"#FF0000", "Lime"=>"#00FF00", "Blue"=>"#0000FF");
echo $color['Red'];
?>
<?php
echo $color['Lime'];
?>
<?php
echo $color['Blue'];
?>
<h2>6. PHP script to calculate and display avrage temperature, five lowest and highest tamperature.</h2>
<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
/*explode - splits a string by a string*/
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
/*count - counts all elements in an array or countable object */
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
/* Sort- sorts an array in ascending order*/ 
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
/* Below is a for loop. It increases it's length to the specified length*/
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

?>


<?php include "footer.php"
?>