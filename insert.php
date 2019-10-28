<?php

declare(strict_types=1);


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



require 'connection.php';


if (!empty($_POST['first_name'])) {
    $con = openConnection();
    echo "test";
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $preferredLang = $_POST['preferred_language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quote_author = $_POST['quote_author'];
    $edited_date = $_POST['edited_date'];



    $statement = $con->prepare('INSERT INTO student (first_name , last_name , username , preferred_language , gender ,linkedin , github  ,email , avatar, video, quote ,edited_date , quote_author) VALUES (:first_name , :last_name , :username , :preferred_language , :gender ,:linkedin , :github  ,:email , :avatar, :video, :quote ,:edited_date , :quote_author)');
    $statement->bindParam(':first_name', $firstName);
    $statement->bindParam(':last_name', $lastName);
    $statement->bindParam(':username', $username);
    $statement->bindParam(':gender', $gender);
    $statement->bindParam(':github', $github);
    $statement->bindParam(':linkedin', $linkedin);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':preferred_language', $preferredLang);
    $statement->bindParam(':avatar', $avatar);
    $statement->bindParam(':video', $video);
    $statement->bindParam(':quote', $quote);
    $statement->bindParam(':edited_date', $edited_date);
    $statement->bindParam(':quote_author', $quote_author);
    $statement->execute();
    /*try {
        $var = $statement->execute([$firstName, $lastName, $username, $gender, $linkedin, $github, $email,$preferredLang, $avatar, $video, $quote, $quoteAuthor]);
        echo $var;
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }*/
}

