<?php

$username = $_POST["username"];
$password = $_POST["password"];

function verification(){
    $users = $GLOBALS["username"];
    $pass = $GLOBALS["password"];
    $file = "./save/save.txt";
    $time = date("d/m/Y H:i:s", time());

    if($users === "devweb" && $pass == 2000){
        $content1 = "Date and time:$time | Staut('Connecté') \n";
        file_put_contents($file, $content1, FILE_APPEND);

        include "./contenue.php";
    }else{
        echo "Password or username incorrect!";

        $content = "Date and time:$time | USERNAME:$users PASSWORD:$pass | Statut:('Error username or password!') \n";
        file_put_contents($file, $content, FILE_APPEND);
    }
}
verification();


?>