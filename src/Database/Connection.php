<?php

declare(strict_types=1);

namespace Quickweb\Library\Database;

use mysqli;

class Connection
{
    /**
     * @var mysqli
     */
    public $instance;

    public function __construct()
    {
        $this->instance = mysqli_connect('localhost', 'quickweb_user', 'quickweb_password', 'epic_story');
    }

//    public static function getInstance(): Connection
//    {
//        if (!isset(self::$instance)) {
//            self::$instance = new Connection();
//        }
//
//        return self::$instance;
//    }

    public function getInstance(): mysqli
    {
        return $this->instance;
    }

    public function insertLogs($arrData)
    {
        $sql = "INSERT INTO `epic_story` (`class`, `action`, `value`) VALUES ('{$arrData['class']}', '{$arrData['action']}', '{$arrData['value']}')";

        $result = \mysqli_query($this->getInstance(), $sql);

        if ($result) {
            header('location:/index.php');
        } else {
            \print_r('Failed to add logs.');
        }
    }

}






