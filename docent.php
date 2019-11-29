<?php
include ('Classes/Questions.php');

if (isset($_POST)) {
    $question = new Questions();
    foreach ($_POST as $index=> $value) {
        switch ($index) {
            case 'onderwerpen':
                $question->addAnswer('Behandelt de juiste onderwerpen?', $value, 'nils@minten.dev', 'docent');
                break;
            case 'lesmateriaal':
                $question->addAnswer('Voldoende les materiaal?', $value, 'nils@minten.dev', 'docent');
                break;
            case 'helder':
                $question->addAnswer('Lessen zijn heel helder?', $value, 'nils@minten.dev', 'docent');
                break;
            case 'docentis':
                $question->addAnswer('Docent is?', $value, 'nils@minten.dev', 'docent');
                break;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./docent.css">

    <title>Docenten zijn heel cool</title>
</head>
<body>
<div class="container">
    <div style="text-align:center">
        <h2>Docent</h2>
        <p>Wie is je docent eigenlijk</p>
    </div>
    <div class="row">
        <div class="column">
            <form action="#" method="POST">
                <label for="onderwerpen">Behandelt de juiste onderwerpen?</label>
                <select name="onderwerpen">
                    <option>Ja</option>
                    <option>Misschien</option>
                    <option>Nee</option>
                </select>
                <label for="lesmateriaal">Voldoende les materiaal?</label>
                <select name="lesmateriaal">
                    <option>Ja</option>
                    <option>Misschien</option>
                    <option>Nee</option>
                </select>
                <label for="helder">Lessen zijn heel helder?</label>
                <select name="helder">
                    <option>Ja</option>
                    <option>Misschien</option>
                    <option>Nee</option>
                </select>
                <label for="docentis">Docent is </label>
                <select name="docentis">
                    <option>Prachtig</option>
                    <option>Mooi</option>
                    <option>Wel oke</option>
                </select>
                <input value="CLICK MIJ" type="submit" />
            </form>
        </div>
    </div>
</div>
</body>
</html>



