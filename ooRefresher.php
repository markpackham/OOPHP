<?php

require 'user_validator.php';

if (isset($_POST['submit'])) {
    // validate entires
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();

    // save data to db
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Object Oriented PHP</title>
</head>
<body>
<div class="new-user">
<h2>Create new user</h2>
<!-- PHP_SELF to use the PHP already in this file -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<label>Username: (6-12 chars)</label>
<input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>">
<div class="error">
<?php echo $errors['username'] ?? '' ?>
</div>
<label for="">Email:</label>
<!-- we're not using Html5's defeault "email" type validation
for this demo -->
<input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">
<div class="error">
<?php echo $errors['email'] ?? '' ?>
</div>
<input type="submit" value="Submit" name="submit">
</form></div>
<p>Learned from https://www.youtube.com/watch?v=QB81W7ibiHE&list=PL4cUxeGkcC9hNpT-yVAYxNWOmxjxL51Hy&index=14</p>
</body>
</html>
