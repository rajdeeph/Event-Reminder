<<<<<<< HEAD
<?php

require_once dirname(__FILE__).'/dbconnect.php';


class query
    {

        function getAllBirthdays()
        {

        $result = array();
        $conn = new dbconnect();
        $conn->setHandler()->query("SELECT * FROM Person");
        var_dump($conn);
        //$a = $conn->handler;
        //$result = $conn->handler->query("SELECT * FROM Person");

        return $result;

        }


    }

$db = new query();
$days = $db->getAllBirthdays();
=======
<?php

require_once dirname(__FILE__).'/dbconnect.php';


class query
    {

        function getAllBirthdays()
        {

        $result = array();
        $conn = new dbconnect();
        $conn->setHandler()->query("SELECT * FROM Person");
        var_dump($conn);
        //$a = $conn->handler;
        //$result = $conn->handler->query("SELECT * FROM Person");

        return $result;

        }


    }

$db = new query();
$days = $db->getAllBirthdays();
>>>>>>> 20e7a5bad43e3bcd54b0e869dde24008f1058199
print_r($days);