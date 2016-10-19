<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'sakuman');
define('DB_NAME', 'ticket_v02');


//exit();
$term = $_GET['term'];

if(isset($_GET['term'])) {
    //echo "<h3>q=".$q;
    //echo "<p>";

    $return_array = array();


    try {
        //$conn = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME."", DB_USER, DB_PASSWORD);

        //$stmt = $conn->prepare("SELECT `id`, `fname`, `lname` FROM `user` WHERE `fname` LIKE :term");
        //$stmt = $conn->prepare("SELECT `id`, `fname`, `lname` FROM `user` WHERE `fname` LIKE '%Som%'");
        //$stmt->bindParam(1, $term, PDO::PARAM_STR);
        //$stmt->execute(array('term' => '%'.$_GET['term'].'%'));
        //$stmt->execute(array("%$term%"));
        //$stmt->execute();
        foreach($dbh->query('SELECT * FROM user WHERE fname LIKE "%'.$term.'%"') as $row) {
            array_push($return_array, array("label" => $row['fname'].' '.$row['lname'], "value" => $row['email']));
            //array_push($return_array, array("label" => $row['fname'].' '.$row['lname'], "value" => $row['id']));
            /*
            echo "<p>" . $row['id'] . "</p>";
            echo "<p>" . $row['fname'] . "</p>";
            echo "<p>" . $row['lname'] . "</p>";
            echo "<p>" . $row['email'] . "</p>";
            */

        }

        /*
        while($row = $stmt->fetch()) {
            $return_arr[] =  $row['fname'];
        }
        */

    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    echo json_encode($return_array);
    //echo "<hr>";
    //echo var_dump($return_array);
}

?>
