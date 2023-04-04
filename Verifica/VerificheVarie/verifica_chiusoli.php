<?php

// 1. Inizializzare il numero di studenti del corso
$numero_studenti = mt_rand(20, 50);

// 2. Valorizzare l'array dei voti
$voti = array();
for ($i = 0; $i < $numero_studenti - 2; $i++) {
  $voti[] = mt_rand(1, 101);
}

// 3. Elencare tutti i voti
$style = array("style='background-color: #dddddd'", "");
$count = 0;
echo "<table>\n";
foreach ($voti as $voto) {
  if ($voto >= 60) {
    $voto = "<strong>$voto</strong>";
  } else {
    $voto = "<em>$voto</em>";
  }
  echo "<tr " . $style[$count % 2] . "><td>$voto</td></tr>\n";
  $count++;
}
echo "</table>\n";

// 4. Modificare l'elenco con un elenco ordinato
sort($voti);
$count = 0;
echo "<ol>\n";
foreach ($voti as $voto) {
  if ($voto >= 60) {
    $voto = "<strong>$voto</strong>";
  } else {
    $voto = "<em>$voto</em>";
  }
  echo "<li " . $style[$count % 2] . ">$voto</li>\n";
  $count++;
}
echo "</ol>\n";

// 5. Riportare quante volte è stata assegnata la lode e il voto più basso
$lode = 0;
$minimo = 101;
foreach ($voti as $voto) {
  if ($voto == 101) {
    $lode++;
  }
  if ($voto < $minimo) {
    $minimo = $voto;
  }
}
echo "<div>Lode: $lode, Voto più basso: $minimo</div>\n";

// 6. Calcolare e visualizzare il voto medio dei promossi
$somma = 0;
$contatore = 0;
foreach ($voti as $voto) {
  if ($voto >= 60) {
    $somma += $voto;
    $contatore++;
  }
}
$media = $somma / $contatore;
echo "<div>Voto medio dei promossi: $media</div>\n";

// 7. Calcolare e visualizzare quanti sono gli studenti potenzialmente ammessi
$posti = 10;
$potenzialmente_ammessi = 0;
foreach ($voti as $voto) {
  if ($voto >= 80) {
    $potenzialmente_amm;
  }
}
?>