<?php
class User
{
    public $username;
    private $email;
    public function __construct($username, $email)
    {
        //$this->username = 'ken';
        $this->username = $username;
        $this->email = $email;
    }
    public function addFriend()
    {
        //return "added a new friend";
        return "$this->username just added a new friend";
    }
    // getters
    public function getEmail()
    {
        return $this->email;
    }
    // setters
    public function setEmail($username)
    {
        // check that an @ symbol exists to prove it is an email
        // via string position
        if (strpos($username, '@') > -1) {
            $this->email = $username;
        };
    }
}
$userOne = new User('mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
echo $userOne->getEmail() . '<br>';
echo $userTwo->getEmail() . '<br>';

$userTwo->setEmail('yoshi@thenetninja.co.uk');

echo $userTwo->getEmail() . '<br>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Object Oriented PHP</title>
</head>
<body>

</body>
</html>
