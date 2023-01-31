<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bando Regionale</title>
</head>
<body>
<?php
        $partecipanti = [];
        $num_partecipanti = rand(10, 100)-5;
        $background_color1 = "#ccc";
        $background_color2 = "#fff";
        $voto_max=0;
        $bocciati=0;
        $somma_voti_bocciati=0;
        $posti=5;
        $assumibili=0;
        $attesa=0;
        for($i=0; $i<$num_partecipanti; $i++){
            $partecipanti[$i] = rand(0, 10);
            
        }
        //print_r ($partecipanti);
        //stampo il contenuto dell'array
        for($i=0; $i < $num_partecipanti; $i++){
            if ($i % 2) {
                $background_color = $background_color1;
            } else {
                $background_color = $background_color2;
            }
            if ($partecipanti[$i]==10){
                $voto_max++;
            }
            if ($partecipanti[$i]<=5) {
                $somma_voti_bocciati+=$partecipanti[$i];
                $bocciati++;
                "<i>" . $partecipanti[$i] . "</i>";
            }
            if ($partecipanti[$i]>8) {
                $assumibili++;
                $attesa=((5 / $assumibili) * 100);
            }
            if ($partecipanti[$i]>=6) {
                "<b>" . $partecipanti[$i] . "</b>";
            }
            echo "<table>"  . "<div style = background-color:$background_color>" . "<li>" . $partecipanti[$i] . "</li>" . "<br>";
        }
        echo "partecipanti con voti massimi: " . "$voto_max" . "<br>";
        echo "media voti dei bocciati: " . $somma_voti_bocciati/$bocciati . "<br>";
        if ($attesa>=100) {
            echo "Gli assumibili subito sono : " . $assumibili . " sono stati assunti tutti";
        } else {
            echo "Gli assumibili subito sono : " . $assumibili . " è stato assunto il " . $attesa . "%";
        }
        
       "</div>";
       "</table>";
        ?>
</body>
</html>