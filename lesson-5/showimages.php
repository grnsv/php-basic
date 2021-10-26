<?php

require_once('./config.php');
require_once('./db.php');

$db = new DB(HOST, USER, PASS, DB_NAME);

$id = $_GET['image_id'] ?? null;
if ($id && is_numeric($id)) {
  $db->query('UPDATE `db`.`images` SET `viewed` = `viewed`+1 WHERE `id` = ' . $id);
  $result = $db->query('SELECT * FROM `db`.`images` WHERE `id` = ' . $id);
  $image = mysqli_fetch_assoc($result);
  if ($image) {
    echo '<figure><img src="' . $image['image_path'] . '" alt="' . $row['image_path'] . '"><figcaption>' . $image['viewed'] . '</figcaption></figure>';
  } else {
    die("Can't find image with id = " . $id);
  }
}
