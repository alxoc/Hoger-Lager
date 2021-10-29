<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hoger Lager</title>
</head>

<body>

    <main>
    <div id="formcontainer">
        <form action="php/actie.php" method="post">

            <?php
                function newsession() { // makes a new session and gives curnumber a random number
                    session_start();

                    $_SESSION["random"]=rand(1,100);

                    echo $_SESSION["random"];
                }
            ?>
            
            <label for="curnumber">Het getal is: <?php newsession() ?></label><br><br> <!-- current number -->

            <input type="submit" name="hoger" value="Hoger"> <!-- Submit buttons -->
            <input type="submit" name="lager" value="Lager"><br><br>

        </form>
    </div>
    </main>

</body>

</html>

<!-- feedback mees:
Er staan een redelijk aantal comments, alleen de uitleg wat het doet kan wat duidelijker
-->