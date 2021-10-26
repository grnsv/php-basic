<?php

require_once('./config.php');
require_once('./db.php');

$db = new DB(HOST, USER, PASS, DB_NAME);

$result = $db->query('SELECT * FROM `db`.`images` WHERE 1 ORDER BY `viewed` DESC');
echo '<ul style="list-style: none; display: flex">';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<li style="margin: 5px;"><a href="showimages.php?image_id=' . $row['id'] . '">';
  echo '<img alt="' . $row['image_path'] . '" width="40px" height="40px" src="' . $row['image_path'] . '"></a></li>';
}
echo '</ul>';
