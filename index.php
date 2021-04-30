<?php
 $partite_campionato = [
   [
     'squadra_casa' => 'roma',
     'squadra_ospite' => 'napoli',
     'data_partita' => '12/11/2021',
     'punteggio' => '12-45',
   ],
   [
     'squadra_casa' => 'milano',
     'squadra_ospite' => 'padova',
     'data_partita' => '18/11/2021',
     'punteggio' => '18-22',
   ]
 ];

 var_dump($partite_campionato);
?>

<h1>Risultati ordinati con ciclo for</h1>

<?php for ($i = 0; $i < count($partite_campionato); $i++) { ?>
  <div class="">
    <?=  $partite_campionato[$i]['squadra_casa'] ?> -
    <?=  $partite_campionato[$i]['squadra_ospite'] ?> |
    <?=  $partite_campionato[$i]['punteggio'] ?>
  </div>
<?php
}
?>
