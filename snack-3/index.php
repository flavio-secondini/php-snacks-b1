<h1>Array di partenza</h1>

<?php
  $date = [
    '11/03/2009' => [
      [
        'nome' => 'Mario',
        'eta' => '12',
        'email' => 'mario12@gmail.com',
      ],
      [
        'nome' => 'Mario2',
        'eta' => '122',
        'email' => 'mario122@gmail.com',
      ],
    ],

    '12/03/2009' => [
      [
        'nome' => 'Luca',
        'eta' => '12',
        'email' => 'luca12@gmail.com',
      ],
      [
        'nome' => 'Luca2',
        'eta' => '122',
        'email' => 'luca122@gmail.com',
      ],
    ],

    '13/03/2009' => [
      [
        'nome' => 'Gianni',
        'eta' => '12',
        'email' => 'gianni12@gmail.com',
      ],
      [
        'nome' => 'Gianni2',
        'eta' => '122',
        'email' => 'gianni212@gmail.com',
      ],
    ],
  ];

  var_dump($date);
?>

<h1>Elenco contenuto array con ciclo for dentro for</h1>

<?php
  $data_singolo = array_keys($date);

  for ($i=0; $i < count($data_singolo); $i++) {
    $dati_data_singolo = $date[$data_singolo[$i]];

    for ($j=0; $j < count($dati_data_singolo); $j++) {
      $info = $dati_data_singolo[$j];
      echo $info['nome'] . "<br>";
      echo $info['eta'] . "<br>";
      echo $info['email'] . "<br>" . "<br>";
    }
  }

?>
