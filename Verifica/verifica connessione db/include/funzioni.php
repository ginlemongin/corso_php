<?php 

/**
 * 2.stampa le chavi elencate di ogni record
 */
    function elenca_records($records, $chiave){

            foreach($records as $v) {
                echo $v[$chiave] . "<br>";
            }

        }

/**3.conta gli elementi dell'array che gli passi*/
    function conta_elementi($records){
       echo "<hr>" . "Elementi trovati: " . count($records) . "<hr>";
    }