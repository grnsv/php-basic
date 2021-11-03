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

    public function doFeedbackAction($action, $author = null, $email = null, $text = null, $tel = null)
    {
        $author = mysqli_real_escape_string($this->link, $author) ?? null;
        $email = mysqli_real_escape_string($this->link, $email) ?? null;
        $text = mysqli_real_escape_string($this->link, $text) ?? null;
        $tel = mysqli_real_escape_string($this->link, $tel) ?? null;

        switch ($action) {
            case 'Create':
                return mysqli_query($this->link, "INSERT INTO reviews (author, email, tel, `text`) VALUES('$author', '$email', '$tel', '$text');");
                break;
            case 'Read':
                if ($author && $email) {
                    return mysqli_query($this->link, "SELECT * FROM reviews WHERE `author` = '$author' AND `email` = '$email';");
                } else {
                    return mysqli_query($this->link, 'SELECT * FROM reviews;');
                }
                break;
            case 'Update':
                return mysqli_query($this->link, "UPDATE reviews SET `text`='$text', `tel`='$tel' WHERE author='$author' AND email='$email';
                ");
                break;
            case 'Delete':
                return mysqli_query($this->link, "DELETE FROM reviews WHERE author='$author' AND email='$email'");
                break;
            default:
                return 'unknown action';
                break;
        }
    }

    public function getProducts()
    {
        return mysqli_query($this->link, "SELECT `id`, `name`, `image_path` FROM products LIMIT 100;");
    }

    public function getProduct($product_id)
    {
        $product_id = mysqli_real_escape_string($this->link, $product_id) ?? null;
        return mysqli_query($this->link, "SELECT * FROM products WHERE `id` = '$product_id';");
    }
}
