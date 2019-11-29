<?php
declare(strict_types=1);
include ('Database.php');
/**
 * @author Nils Minten <nils@momoyoga.com>
 */
final class Questions
{
    private $database;

    public function __construct()
    {
        $this->database = new Database('hackathon');
    }

    public function addAnswer(string $question, string $answer, string $userEmail, string $class) {
        $sql = sprintf('INSERT INTO `answers`(`Question`, `Answer`, `User`, `class`) VALUES (\'%s\', \'%s\', \'%s\', \'%s\');',
            $question,
            $answer,
            $userEmail,
            $class);
        return $this->database->query($sql);
    }
}
