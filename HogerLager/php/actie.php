<htmm>
    <body>
        <form>

            <?php
                $randnumb = rand(1,100); // randomizes the curnumber

                $choice = ""; // empty choice variable

                session_start();

                $prevnumber = $_SESSION["random"]; // sets var $prevnumber to the random number in index.php

                function prevnumber() { // echo's the $prevnumber in a function 
                    global $prevnumber;

                    echo $prevnumber;
                }

                function prevchoice() { // sets the empty $choice variable to "hoger" / "lager" depending on the choice made in index.php
                    global $prevnumber;
                    global $choice;

                    if (isset($_POST['hoger'])) {
                        echo "Hoger dan ".$prevnumber;
                        $choice = "hoger";
                    }

                    if (isset($_POST['lager'])) {
                        echo "Lager dan ".$prevnumber;
                        $choice = "lager";
                    }
                }

                function result() { // calculates if you've won or lost
                    global $prevnumber;
                    global $choice;
                    global $randnumb;

                    if ($choice == "hoger" && $randnumb > $prevnumber) { // choice higher, random number higher than prev number, status won
                        echo "$randnumb is hoger dan $prevnumber dus je hebt gewonnen.";
                    }
                    elseif ($choice == "lager" && $randnumb > $prevnumber) {  // choice lower, random number higher than prev number, status lost
                        echo "$randnumb is hoger dan $prevnumber dus je hebt verloren.";
                    }
                    elseif ($choice == "hoger" && $randnumb < $prevnumber) {  // choice higher, random number lower than prev number, status lost
                        echo "$randnumb is lager dan $prevnumber dus je hebt verloren.";
                    }
                    else {  // choice lower, random number lower than prev number, status won
                        echo "$randnumb is lager dan $prevnumber dus je hebt gewonnen.";
                    }
                }
            ?>
            <label for="curnumber">Het getal is: <?php echo $randnumb ?></label><br> <!-- current number -->
            <label for="prevnumber">Het vorige getal was: <?php prevnumber() ?></label><br> <!-- previous number -->
            <label for="prevchoice">Jij koos: <?php prevchoice() ?></label><br> <!-- previous choice -->
            <label for="result"><?php result()?></label><br><br> <!-- result -->
            <?php echo '<form><input type="button" value="Probeer het nog een keer" onClick="javascript:history.go(-1)"></form>' ?> <!-- Allows you to try again by sending the user back to index.php -->

        </form>
    </body>
</html>