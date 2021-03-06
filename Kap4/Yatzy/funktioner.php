<?php

declare (strict_types=1);



/**
 * Sparar undan en cookie med angivet namn
 * @param string $namn
 * @return void
 */
function sparaNamn(string $namn): void {
    // Sätter cookien 'namn' till värdet på inparametern
    setcookie('namn', $namn);

    return;
}

function rullaTarning(): int {
    $varde = random_int(1, 6);

    return $varde;
}

/**
 * Funktion för att avgöra vilka tärningar som ska slås om
 * @param array $post elementet tarning_#=on betyder att tärningen ska slås om
 *                    elementet t_# har tärningens tidigare värde
 * @return array 5 heltal
 */
function slaOmTarningar(array $post): array {
    $ret = [];
    for ($i = 0; $i < 5; $i++) {
        if (isset($post["tarning_$i"])) {
            // Slå om tärningen
            $ret[$i] = rullaTarning(); 
        } else {
            // Behåll tärningens värde (gör om till heltal
            $ret[$i] = (int) $post["t_$i"];
        }
    }

    // Returnera tärningarnas nya värden
    return $ret; 
}

function utvarderaTarningar(array $tarning): array {
    switch(count(array_count_values($tarning))) {
        case 1:
            return["resultat" => "Yatzy!", "varde" => 50];
        case 2:
            if (raknaFyrtal(array_count_values($tarning)) !== 0) {
                return["resultat" => "Fyrtal", "varde" => raknaFyrtal(array_count_values($tarning))];
            } else {
                return["resultat" => "Kåk", "varde" => raknaKak(array_count_values($tarning))];
            }
        case 3:
              if (raknaTretal(array_count_values($tarning)) !== 0) {
                return["resultat" => "Tretal", "varde" => raknaTretal(array_count_values($tarning))];
              } else {
                return["resultat" => "TvaPar", "varde" => raknaTvaPar(array_count_values($tarning))];
                
            }
        case 4:
            return["resultat" => "Par!", "varde" => raknaPar(array_count_values($tarning))];
        default;
            break;
        case 5:
            return["resultat" => "Stege", "varde" => raknaStege(array_count_values($tarning))];
    }
    return ["resultat" => "Par", "varde" => 7];
    
}

function raknaPar(array $values): int {
    foreach ($values as $ogon => $antal) {
        if ($antal == 2) {
            return 2 * $ogon;
        }
    }
    return 0;
}
function raknaTretal(array $values): int {
    foreach ($values as $ogon => $antal) {
        if ($antal == 3) { 
            return 3 * $ogon;
        }
    }
    return 0;
}
function raknaTvaPar(array $values):int {
    $summa=0;
    foreach ($values as $ogon=>$antal) {
        $summa += $ogon*$antal;
    }
    return $summa;
} 

function raknaFyrtal(array $values): int {
    foreach ($values as $ogon => $antal) {
        if ($antal == 4) {
            return 4 * $ogon;
        }
    }
    return 0;
}

function raknaKak(array $values):int {
    $summa=0;
    foreach ($values as $ogon=>$antal) {
        $summa += $ogon*$antal;
    }
    return $summa;
} 

function raknaStege (array $values):int {
    $summa=0;
    foreach ($values as $ogon => $antal) {
        $summa += $ogon*$antal;
    }
    return $summa;
}