<?php include("head.php"); ?>
<?php 

    // This conditional statement checks if the form fields are empty .
    // If true, the user is redirected to a try again page.
    if(empty($_POST['name']) || empty($_POST['gender']) || empty($_POST['age']) || empty($_POST['personality']) || empty($_POST['os']) || empty($_POST['minage']) || empty($_POST['maxage'])){
        header('Location: error_page.php');

    }
    if(strpos(file_get_contents('singles.txt'), $_POST['name']) !== false){
        header('Location: error_page.php');
    }
   else{
        $file = 'singles.txt';
        // Open the file to get existing content
        $current = file_get_contents($file);
        // Append a new person to the file
        $current .= "${_POST['name']},${_POST['gender']},${_POST['age']},${_POST['personality']},${_POST['os']},${_POST['minage']},${_POST['maxage']}\n";
        // Write the contents back to the file
        file_put_contents($file, $current);
   }
?>

<div>
<h1>Thank you!</h1>
<p>
    Welcome to NerdLuv, <?= $_POST["name"] ?><br/><br/>
    Now <a href="matches.php">log in to see your matches!</a>
</p>

<?php include("foot.php"); ?>