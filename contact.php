<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $imie = htmlspecialchars($_POST["imie"]);
    $email = htmlspecialchars($_POST["email"]);
    $news = htmlspecialchars($_POST["news"]);



    if (empty($imie) || empty($email) || empty($news)) {
        echo "<p>tu ne mozna byc puste</p>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "podaj normalny email";
        exit;




    } 
 header("Location: podziekowanne.html");
 exit;
}else {
        echo "blond presywania formy";
    }

echo "Request method: ". $_SERVER['REQUEST_METHOD']





?>