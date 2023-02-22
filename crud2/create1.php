<?php
include "../header.php";
?>
<form method="post" action="" onsubmit="return crud()" name>
    <input type="text" name="fname" placeholder="first name " required onblur="fname()"><br><br>
    <input type="text" name="lname" placeholder="last name " required><br><br>
    <input type="text" name="customer phone number"placeholder="phone number " required><br><br>
    <input type="text" name="date" placeholder="date" required><br><br>
<select name="guoupId">
    <input type="submit" value="submit" name="reserve">
    
<?php include "footer.php"?>
