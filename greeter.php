<?php
session_start();
if(!isset($_SESSION['choice'])) {
    $_SESSION['choice'] = null;
}
$choice = $_SESSION['choice'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Four Corners</title>
        <link rel="stylesheet" type="text/css" href="greeter.css">
    </head>
    <body>
        <script src="greeter.js"></script>
        <div class="checks">
            <form action="post.php" method="POST">
                <p id="question">Please select your favorite superhero:</p>

                <input type="radio" name="superhero" id="batman">
                <label for="batman">Batman</label><br>
                <input type="radio" name="superhero" id="superman">
                <label for="superman">Superman</label><br>
                <input type="radio" name="superhero" id="ironman">
                <label for="ironman">Iron Man</label><br>
                <input type="radio" name="superhero" id="aquaman">
                <label for="aquaman">Aquaman</label><br>

                <p id="question">Please select your favorite ice cream flavor:</p>
                <input type="radio" name="icecream" id="vanilla">
                <label for="vanilla">Vanilla</label><br>
                <input type="radio" name="icecream" id="chocolate">
                <label for="chocolate">Chocolate</label><br>
                <input type="radio" name="icecream" id="strawberry">
                <label for="strawberry">Strawberry</label><br>
                <input type="radio" name="icecream" id="neopolitan">
                <label for="neopolitan">Neopolitan</label><br>

                <p id="question">Please select your favorite TV genre:</p>
                <input type="radio" name="tv" id="anime">
                <label for="anime">Anime</label><br>
                <input type="radio" name="tv" id="documentary">
                <label for="documentary">Documentary</label><br>
                <input type="radio" name="tv" id="comedy">
                <label for="comedy">Comedy</label><br>
                <input type="radio" name="tv" id="drama">
                <label for="drama">Drama</label><br>

                <p id="question">Please select your favorite sport:</p>
                <input type="radio" name="sport" id="football">
                <label for="football">Football</label><br>
                <input type="radio" name="sport" id="basketball">
                <label for="basketball">Basketball</label><br>
                <input type="radio" name="sport" id="baseball">
                <label for="baseball">Baseball</label><br>
                <input type="radio" name="sport" id="soccer">
                <label for="soccer">Soccer</label><br>

                <p><input type="submit" name="submit" value="Go!"></p>

            </form>
        </div>
    </body>
</html>