<?php
include('AdminFunctions.php');

$functions = new AdminFunctions();
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="author" content="Nils Minten">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All users awnsers</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="?function=users">Users <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
        if ($_GET['function'] === 'users') {
            $users = $functions->getUsers();
            ?>
            <ul class="list-group">
                <?php
                foreach ($users as $user) {
                ?>
                    <a href="?function=class&user=<?php echo $user ?>"><li class="list-group-item"><?php echo $user ?></li></a>
                <?php
            }
            ?>
            </ul>
            <?php
        }

        if ($_GET['function'] === 'class')  {
            $classes = $functions->getUserClasses($_GET['user']);
            ?>
            <ul class="list-group 2">
                <?php
                foreach ($classes as $class) {
                    ?>
                    <a href="?function=answer&user=<?php echo $_GET['user'] ?>&class=<?php echo $class ?>"><li class="list-group-item"><?php echo $class ?></li></a>
                    <?php
                }
                ?>
            </ul>
            <?php
        }

        if ($_GET['function'] === 'answer')  {
            $answers = $functions->getUserAnswers($_GET['user'], $_GET['class']);
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Answer</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($answers as $answer) {
                    ?>
                        <tr>
                            <td><?php echo $answer['question'] ?></td>
                            <td><?php echo $answer['answer'] ?></td>
                        </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
            <?php
        }
    ?>
    </body>
</html>
