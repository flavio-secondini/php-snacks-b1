<h1>Array alunni</h1>

<?php
  $alunni = [
    [
      'nome' => 'mario',
      'cognome' => 'rossi',
      'voti' => [5,6,7,8],
    ],
    [
      'nome' => 'luca',
      'cognome' => 'bianchi',
      'voti' => [6,7,8,9],
    ],
    [
      'nome' => 'gianni',
      'cognome' => 'verdi',
      'voti' => [7,8,9,10],
    ],
  ];

  var_dump($alunni);
?>

<h1>Nome, cognome, media</h1>

<?php
  for ($i=0; $i < count($alunni); $i++) {
    $dato = $alunni[$i];

    echo $dato['nome'] . "<br>";
    echo $dato['cognome'] . "<br>";
    echo array_sum($dato['voti']) / count($dato['voti']) . "<br>" . "<br>";
  }
?>
