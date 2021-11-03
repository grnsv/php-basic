<?php

class DB
{
    private $link;

    public function __construct($host, $user, $pass, $db_name)
    {
        $this->link = mysqli_connect($host, $user, $pass, $db_name);
    }

    public function __destruct()
    {
        mysqli_close($this->link);
    }

    public function doAuthAction($action, $login, $pass)
    {
        $login = mysqli_real_escape_string($this->link, $login) ?? null;
        $pass = mysqli_real_escape_string($this->link, $pass) ?? null;
        $hash = mysqli_fetch_assoc(mysqli_query($this->link, "SELECT `pass` FROM `logins` WHERE `user` = '$login' LIMIT 1;"))['pass'];

        switch ($action) {
            case 'Authenticate':
                return password_verify($pass, $hash);
                break;
            case 'Register':
                if ($hash) {
                    return false;
                } else {
                    $hash = password_hash($pass, null);
                    return mysqli_query($this->link, "INSERT INTO `logins` (`user`, `pass`) VALUES('$login', '$hash');");
                    break;
                }
            default:
                return 'unknown action';
                break;
        }
    }
}
