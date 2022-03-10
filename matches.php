<?php include("head.php"); ?>

<!--This form takes the user's name as the sign in parameter and pass the value to another php page-->
<form action="matches-submit.php" method="get">
    <fieldset>
        <legend>Returning User: </legend>
        <ul >
            <li><b>Name:</b> <input name="name" type="text" size="16"> </li><br>
        </ul>
        <input id="submit-color" type="submit" name="submit" value="View My Matches">

    </fieldset>
</form>

<?php include("foot.php"); ?>