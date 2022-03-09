<?php include("head.html"); ?>

<form action="signup-submit.php" method="post">
    <fieldset>
        <legend>New User Signup: </legend>
        <ul >
            <li> Name: <input name="name" type="text" size="16"> </li>
            <li> Gender: <input name="gender" type="radio" value="M">Male <input name="gender" type="radio" value="F" checked="checked">Female</li>
            <li> Age: <input name="age" type="number" size="6" maxlength="2"> </li>
            <li> Personality Type: <input name="personality" type="text" size="6" maxlength="4"> <a href="https://www.humanmetrics.com/personality/test">(Don't know your type?)</a></li>

        </ul>

    </fieldset>
</form>

<?php include("foot.html"); ?>