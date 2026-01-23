<?php

declare(strict_types=1);

namespace App\Models;

class HomeController
{
    public function index()
    {

           return <<<FORM
                <form method="POST" action="/upload" enctype="multipart/form-data">

                    <label for="file">Choose file to upload:</label>
                    <input type="file" id="file" name="uploadedFile[]" multiple required>

                    <input type="submit" value="Submit">

           FORM;
    }

    public function upload()
    {


        $allowed = [
        'image/jpeg',
        'image/png',
        'application/pdf'
        ];



        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";





        $file_name_array = $_FILES['uploadedFile']['name'];
        $file_path_array = $_FILES['uploadedFile']['tmp_name'];


        for ($i = 0; $i < count($file_name_array); $i++) {
            $mime_type = mime_content_type($file_path_array[$i]);
            if (!in_array($mime_type, $allowed)) {
                die("File type not allowed.");
            }
        }




        foreach ($file_name_array as $index => $file_name) {
            move_uploaded_file(
                $file_path_array[$index],
                //"/etc/passwd"
                STORAGE . $file_name
            );
        }
    }
}
