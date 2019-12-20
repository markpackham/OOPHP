<?php

if (isset($_POST['submit'])) {
    // validate entires
    echo "submitted"
    ;
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
<label>Username:</label>
<input type="text" name="username">
<label for="">Email:</label>
<!-- we're not using Html5's defeault "email" type validation
for this demo -->
<input type="text" name="email">
<input type="submit" value="Submit" name="submit">
</form></div>
</body>
</html>
