<?php include("head.html"); ?>

<form action="signup-submit.php" method="post">
    <fieldset>
        <legend>New User Signup: </legend>
        <ul >
            <li><b>Name:</b> <input name="name" type="text" size="16"> </li><br>
            <li><b> Gender:</b> <input name="gender" type="radio" value="M">Male <input name="gender" type="radio" value="F" checked="checked">Female</li><br>
            <li><b>Age:</b> <input name="age" type="number" size="6" maxlength="2"> </li><br>
            <li><b>Personality Type:</b> <input name="personality" type="text" size="6" maxlength="4"> <a href="https://www.humanmetrics.com/personality/test">(Don't know your type?)</a></li><br>
            <li><b>Favorite OS:</b>  <select name="os"><option selected="selected">Windows</option><option>Mac OS X</option></select></li><br>
            <li><b>Seeking age: </b><input type="text" name="minage" size="6" maxlength="2" value="min" />to<input type="text" name="maxage" size="6" maxlength="2" value="max" /></li>
        </ul>
        <input id="submit-color" type="submit" name="submit" value="Sign Up">

    </fieldset>
</form>

<?php include("foot.html"); ?>