<?php
class User
{
    public $username;
    protected $email;
    public $role = 'member';
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
    public function message()
    {
        return "$this->email sent a new message";
    }
    // getters
    public function getEmail()
    {
        return $this->email;
    }
    // setters
    public function setEmail($username)
    {
        if (strpos($username, '@') > -1) {
            $this->email = $username;
        };
    }
}
class AdminUser extends User
{
    public $level;
    public $role = 'admin';
    public function __construct($username, $email, $level)
    {
        parent::__construct($username, $email);
        $this->level = $level;
    }
    public function message()
    {
        return "admin $this->email sent a new message";
    }
}
$userOne = new User('mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
$userThree = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5);
echo $userOne->message() . '<br>';
echo $userThree->message() . '<br>';
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
