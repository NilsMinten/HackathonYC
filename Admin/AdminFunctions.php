<?php
declare(strict_types=1);
include ('../Classes/Database.php');

/**
 * @author Nils Minten <nils@momoyoga.com>
 */
final class AdminFunctions
{
    private $database;

    public function __construct()
    {
        $this->database = new Database('hackathon');
    }

    public function getUsers() {
        $sql = 'SELECT DISTINCT(`user`) FROM `answers`;';
        $result = $this->database->query($sql);

        $resultArray = [];
        if ($result->num_rows >= 1) {
            while ($row = $result->fetch_assoc()) {
                $resultArray[] = $row['user'];
            }
        }

        return $resultArray;
    }

    public function getUserClasses(string $user) {
        $sql = sprintf("SELECT DISTINCT(`Class`) FROM `answers` WHERE `User` = '%s'", $user);
        $result = $this->database->query($sql);

        $resultArray = [];
        if ($result->num_rows >= 1) {
            while ($row = $result->fetch_assoc()) {
                $resultArray[] = $row['Class'];
            }
        }

        return $resultArray;
    }

    public function getUserAnswers(string $user, string $class) {
        $sql = sprintf("SELECT * FROM `answers` WHERE `User` = '%s' AND `Class`='%s'", $user, $class);
        $result = $this->database->query($sql);

        $resultArray = [];
        if ($result->num_rows >= 1) {
            while ($row = $result->fetch_assoc()) {
                $resultArray[] = [
                    'question' => $row['Question'],
                    'answer' => $row['Answer']
                ];
            }
        }

        return $resultArray;
    }
}
