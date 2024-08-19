<?php

?>

<?php
    include "partials/_header.php";
    include "partials/_navbar.php";
    require "libs/variables.php";
    require "libs/functions.php";
    include "partials/_title.php";
    if(isset($_POST["addBook"])){
        $upload0k = true;
        $dest_path = "./uploaded-files/";
        $filename = $_FILES["bookImg"]["name"];
        $fileSize = $_FILES["bookImg"]["size"];
        $fileExtentions = array("jpg", "jpeg", "png", "gif");
        $filename_seperater = explode(".", $filename);
        $fileNameWithoutExt = $filename_seperater[0];
        $fileNameExt = $filename_seperater[1];



        $bookName = safeHtml($_POST["bookName"]);
        $bookAuthor = safeHtml($_POST["bookAuthor"]);
        $bookDesc = safeHtml($_POST["bookDesc"]);
        $bookStars = $_POST["bookStars"];
        $bookComm = $_POST["bookComm"];
        $bookCategory = $_POST["bookCategory"];
        $bookVisible = $_POST["bookVisible"];
        if(!in_array($fileNameExt, $fileExtentions)){
            echo "Dosya uzantısı desteklenmiyor. Sadece ".implode(",", $fileExtentions). " uzantılı dosyaları yükleyin."."<br>";
            $upload0k = false;
        }
        else if(empty($filename)){
            echo "Dosya seçiniz."."<br>";
            $upload0k = false;
        }
        else if($fileSize > 5000000){
            echo "Dosya boyutu 5mb büyüklüğü aşmamalı."."<br>";
            $upload0k = false;
        }
        else if(!$upload0k){
            echo "Dosya yüklenemedi";
        }
        else{
            $bookImg = "img/" . $_FILES["bookImg"]["name"];
            move_uploaded_file($_FILES["bookImg"]["tmp_name"], $bookImg);
        }




        echo addBook($books, $bookName, $bookAuthor, $bookImg, $bookDesc, $bookStars, $bookComm, $bookCategory, $bookVisible);
    }
    include "partials/_book_list.php";
    


    

    include "partials/_footer.php";
?>
