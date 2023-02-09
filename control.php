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

                        <h4>4.Write a program to get inputs (age and name) from the user and based on their age, decide
                            if
                            he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)<h4>
                                <?php
                                $name = readline("Enter your name: ");
                                $age = readline("Enter your age: ");

                                if ($age >= 18) {
                                    echo "$name, you are eligible for voting.";
                                } else {
                                    echo "$name, you are not eligible for voting.";
                                }
                                ?>

                                <?php include "footer.php" ?>