<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 2</title>
</head>
<body>
  <?php
  $IsEasy = true;
  if($IsEasy == true) {
    echo 'C\'est facile !!';
  }
  elseif($IsEasy == false) {
    echo 'C\'est difficile !!!';
  }

  if($IsEasy) {
    echo 'C\'est facile !!';
  }
  else {
    echo 'C\'est difficile !!!';
  }
  ?>
</body>
</html>
