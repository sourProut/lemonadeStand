<?php
$action = filter_input(INPUT_POST,'action');
if($action == NULL){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
   <form action="register.php" method="post">
   <fieldset>
    <legend>Registration Form</legend>
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="fname"><br>
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="lname"><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br>
    <label for="newsletter">Sign Up For Newsletter</label>
    <input type="checkbox" name="newsletter" id="newsletter" value="yes"><br>
    <input type="submit" name="action" value="submit" >
    </fieldset>
    </form> 
</body>
</html>
<?php
} else {
    $fname = filter_input(INPUT_POST,'fname');
    $lname = filter_input(INPUT_POST,'lname');
    $email = filter_input(INPUT_POST,'email');
    $newsletter = filter_input(INPUT_POST,'newsletter');
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Submitted</title>
    </head>
    <body>
        <p>First Name: <?php echo $fname; ?></p>
        <p>Last Name: <?php echo $lname; ?></p>
        <p>Email: <?php echo $email; ?></p>
        <p>Newsletter: <?php echo $newsletter; ?></p>
    </body>
    </html>
<?php
}