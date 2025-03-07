<?php
// Môžeme definovať otázky a odpovede ako pole, aby sa ľahšie manipulovali
$questions = [
    "Aký je pôvod banánov a v ktorých oblastiach sveta sa najviac pestujú?",
    "Aké zdravotné výhody ponúkajú banány, a prečo sú považované za výživnú potravinu?",
    "Aký je rozdiel medzi zelenými a zrelými banánmi v zmysle chuti a využitia v kuchyni?",
    "Ako sa banány skladajú z hľadiska nutričných hodnôt, ako sú vitamíny a minerály?",
    "Aké sú rôzne odrody banánov a ktoré sú najbežnejšie dostupné na trhu?"
];

$answers = [
    "Banány pochádzajú pôvodne z juhovýchodnej Ázie, konkrétne z oblasti Malajzie, Indonézie a Filipín. Dnes sa však pestujú v tropických a subtropických oblastiach po celom svete. Najväčšími producentmi banánov sú krajiny ako Indie, Čína, Filipíny, Brazília a Ekvádor.",
    "Banány sú bohaté na vitamín C, vitamín B6, draslík a vlákninu. Draslík pomáha udržiavať zdravý krvný tlak, vitamín B6 je dôležitý pre správnu funkciu nervového systému, a vláknina podporuje trávenie. Banány tiež obsahujú antioxidanty, ktoré pomáhajú chrániť telo pred voľnými radikálmi. Sú tiež výborným zdrojom energie vďaka prirodzeným cukrom, ako je fruktóza, glukóza a sacharóza.",
    "Zelené banány sú ešte nezrelé a majú menej sladkú chuť. Sú bohaté na škrob, ktorý sa neskôr počas zrenia premieňa na cukry. Zelené banány sú často používané na varenie alebo pečenie, napríklad v rôznych tradičných pokrmoch ako „patacones“ (smažené plátky nezrelého banánu). Zrelé banány sú sladké a sú ideálne na konzumáciu čerstvé, pridávajú sa do smoothies, dezertov alebo na pečenie (napríklad do banánového chleba).",
    "Banány sú veľmi výživné, obsahujú: Vitamín B6 (asi 20% dennej odporúčanej dávky v jednom banáne), Vitamín C, Draslík (jeden banán poskytuje približne 10% dennej odporúčanej dávky), Vláknina (jedan banán obsahuje asi 3 gramy vlákniny). Banány sú tiež nízkokalorické, s približne 90 kalóriami na 100 gramov.",
    "Existuje viacero odrôd banánov, pričom najznámejšie a najbežnejšie sú: Cavendish: Najrozšírenejšia odroda, ktorú nájdeme v obchodoch po celom svete. Má žltú šupku a je sladký. Plantain (plantážny banán): Tieto banány sú väčšie, majú silnejšiu šupku a používajú sa hlavne na varenie. Sú menej sladké než Cavendish. Red bananas: Tieto banány majú červenú až fialovú šupku a sladkú chuť, ktorá sa podobá na med."
];
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otázky a odpovede o banánoch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #4CAF50;
        }
        .question {
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
        .answer {
            margin-bottom: 20px;
            background-color: #f1f1f1;
            padding: 10px;
            border-left: 5px solid #4CAF50;
        }
    </style>
</head>
<body>

    <h1>Otázky a odpovede o banánoch</h1>

    <?php
    for ($i = 0; $i < count($questions); $i++) {
        echo "<div class='question'>" . ($i + 1) . ". " . $questions[$i] . "</div>";
        echo "<div class='answer'>" . $answers[$i] . "</div>";
    }
    ?>

</body>
</html>
