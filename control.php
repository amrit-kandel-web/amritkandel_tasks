<?php
include "header.php"

    ?>
<h1>1. Write a script that gets the current month and prints one of the following responses, depending whether it <h1>
        <?php
        $title = "controlflow";

        $current_month = date("F");

        if ($current_month == "August") {
            echo "It's August, so it's still holiday.";
        } else {
            echo "Not August, this is $current_month so I don't have any holidays.";
        }
        ?>

        <h2>2. Assign colour red to a variable name $color and check to print one the following responses (if else
            statement)
            The color is red.
            The color is not red.
            <h2>

                <?php

                //if else statement
                

                $color = "red";

                if ($color == "red") {
                    echo "The color is red.<br>";
                } else {
                    echo "The color is not red.<br>";
                }

                ?>

                <h3>3. Write a program to grade students based on their total score for a subject. Use variable to hold
                    the total score. The grading scheme is:<h3>
                        <?php
                        $total_score = 75; // the student's total score
                        
                        if ($total_score > 80) {
                            echo "Excellent";
                        } elseif ($total_score > 70) {
                            echo "Great";
                        } elseif ($total_score > 60) {
                            echo "Good";
                        } elseif ($total_score > 50) {
                            echo "Pass";
                        } else {
                            echo "Fail";
                        }
                        
                        ?>


                        
                                    <form action="" method="POST">
                                    name: <input type="text" name="name" name=required>
                                    age: <input type="text" name="age" name=required>
                                    <input type="submit" name="submit" value="submit">

                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $age = $_POST["age"];
                                        if ($age >= 18) {
                                            echo " is eligible for voting.";
                                        } else {
                                            echo " is not eligible for voting.";
                                        }

                                    }

                                    ?>
                                    <?php
                                    $user_agent = $_SERVER['HTTP_USER_AGENT']; //last 
                                    $browser = "Mozilla";
                                    switch ($user_agent) {
                                        case (strpos($user_agent, 'Mozilla') == true);
                                    }

                                    ?>
                                </form>