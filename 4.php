<?php
  $title = 'Title';
  $date = date('Y-m-d', $timestamp);
  $hell = 'Hello😈😈😈';
  $txt = 'В задании не сказано, где взять имеющийся HTML-шаблон';
?>
<html>
  <head>
    <title><?php echo $title;?></title>
  </head>
  <body>
    <h1><?php echo $hell;?></h1>
    <p><?php echo $txt;?></p>
    <footer>
      <span><?php echo $date;?></span>
    </footer>
  </body>
  </html>