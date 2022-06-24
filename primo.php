<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
$inputCensor = $_GET['censored'];
$text = 'Non è carino usare la parola cagare. Dire ad esempio: "Il gatto ha provato a cagare nel lavandino!", potrebbe essere inadeguato durante la call.';
$censored = str_replace ($inputCensor,'***',$text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h1>Cose da non dire a lezione</h1>
    <p>
    <?= $censored ?>
    </p>
    <form action="" method="get">
        <label for="Censurami">Censurami</label>
        <input type="text" name="censored" id="input-censor">
        <button>Inserisci la parola del gatto</button>
        <p>
            Il testo editato è lungo: <?= strlen($censored) ?> lettere.
        </p>
    </form>
</body>
</html>