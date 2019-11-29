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

    public function getUserAnswers(string $user) {
        $sql = sprintf("SELECT * FROM `user` WHERE `user` = '%s'", $user);
    }
}
