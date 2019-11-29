<?php
    session_start();

    if (isset($_POST['email']) && isset($_POST['class'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['class'] = $_POST['class'];
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
                <label for="email">E-mail</label>
                <input id="email" type="email" placeholder="E-Mail"/>
                <label for="class">Welk vak wil je invullen?</label>
                <select name="class">
                    <option value="OOP">OOP</option>
                    <option value="React">React</option>
                    <option value="Python">Python</option>
                    <option value="Web ontwikkeling">Web ontwikkeling</option>
                    <option value="Java">Java</option>
                    <option value="Database">Database</option>
                    <option value="Comminucatievaardiheden">Comminucatievaardiheden</option>
                    <option value="Persoonlijk ontwikkeling">Persoonlijk ontwikkeling</option>
                </select>
                <input value="CLICK MIJ" type="submit" />
            </form>
        </div>
    </div>
</div>
</body>
</html>



