<?php include "header.php" ?>
$title= "Exercise 3";

<h1> Exercise 3. In-class Task variable & Operators (variable.php)</h1>
<h2>
    1 Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using
    tag: Hello …., You are welcome to my site.
</h2>
<form action="action.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" name="fname" required placeholder="First Name" class="form-control">
        </div>
        <div class="col">
            <input type="text" name="lname" required placeholder="Last Name" class="form-control">
        </div>
        Birth Date: <input type="date" name="bdate"> <br>
        select fav Color: <input type="color" name="color"> <br>
        <input type="submit" value="submit">

        <h3> 3 Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.</h3>

<table class="table table-dark">
<thead>
  <tr>
    <th scope="col">S.N</th>
    <th scope="col">Name</th>
    <th scope="col">Grade</th>
   
  </tr>
</thead>
<tbody>
  <tr>
    <th scope="row">1</th>
    <td>Pekka</td>
    <td>5</td>
   
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>Johanna</td>
    <td>4</td>

  </tr>
  <tr>
    <th scope="row">3</th>
    <td> Jhon</td>
    <td>5</td>
  </tr>
</tbody>
</table>
</table>


</form>
<h3>4 Write a PHP script with two string variables. Assign any text to these variables. Join them together.
            Print the length of the string. (Hint: string function)</h3>
<?php

$string1 = "string";
$string2 = "function";
$combined_string = $string1 . " " . $string2;

echo "The combined string is: " . $combined_string;
echo "The length of the combined string is: " . strlen($combined_string) . "\n";
?>


<h4> 5 Write a script to add up the numbers:</h4>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

$sum = $num1 + $num2 + $num3;

echo "The sum of " . $num1 . ", " . $num2 . " and " . $num3 . " is " . $sum;

?>
<?php include "footer.php" ?>