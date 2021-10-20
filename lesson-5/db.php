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

  public function query($query)
  {
    $query = mysqli_real_escape_string($this->link, $query);
    return mysqli_query($this->link, $query);
  }
}
