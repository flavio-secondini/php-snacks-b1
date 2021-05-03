<?php
  $nome = $_GET['name'];
  $mail = $_GET['email'];
  $eta = $_GET['age'];

  var_dump($nome,$mail,$eta);
?>

<?php
  if (strpos($mail, '@') && strpos($mail, '.') && strlen($nome) > 3 && is_numeric($eta)) {
    echo 'Accesso Riuscito';
  } else {
    echo 'Accesso Negato';
  }
?>
