<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{
    public function index()
    {


        // echo $_SERVER['SERVER_PROTOCOL'];
          /*this will be ignored as we are not using https*/
        // header("Strict-Transport-Security: max-age=31536000; includeSubDomains");


            // phpinfo();
        try {
             $db = new PDO('mysql:dbname=my_db;host=db', 'root', 'root');
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }



        $full_name = "Amr Talaat";
        $email = "amr3@example.com";

        // $query = 'INSERT INTO users (full_name, email) VALUES (:full_name,:email)';

        // $stmt = $db->prepare($query);

        // $stmt->bindParam(':full_name', $full_name);
        // $stmt->bindParam(':email', $email);

        // $stmt->execute();



        // $db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);

        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


        $id = 7;
        $user = $db->query('SELECT * FROM users WHERE id =' . $id);
        $result = $user->fetch(mode:PDO::FETCH_ASSOC);
        echo "<pre>";
        var_dump($result);
        echo "</pre>";


        $emulated_prepares = $db->getAttribute(PDO::ATTR_EMULATE_PREPARES);
        echo "Emulated Prepares: " . ($emulated_prepares ? 'true' : 'false') . PHP_EOL;


        // $email = $_GET['email'];
        // $query = 'SELECT * FROM users WHERE email='  . $email ;


        // echo $query;


        // $stmt = $db->query($query);

        // foreach ($stmt as $row) {
        //     // echo $row['name'] . "\n";
        //     echo "<pre>";
        //     print_r($row);
        //     echo "</pre>";
        // }
        // // var_dump($db);

        return View::make("index");
    }

    public function download()
    {


        $fileName = STORAGE . 'Untitled 1.pdf';

        header('Content-Disposition: attachment; filename="sample.pdf"');
        header('Content-Type: application/pdf');

        readfile($fileName);
        exit();
    }
}
