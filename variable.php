<?PHP include "header.php" ?>
$title= "Exercise 3";
<h3> Exercise 3. In-class Task variable & Operators (variable.php)</h3>
<h2>
    Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using
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
</form>
<?PHP include "footer.php" ?>