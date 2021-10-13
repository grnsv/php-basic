<?php
  function remove_spaces($string) {
    return str_replace(' ', '_', $string);
  }

  $string = "широкая электрификация южных губерний даст мощный толчок подъёму сельского хозяйства";
  echo remove_spaces($string, $table);