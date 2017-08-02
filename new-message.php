<?php
include_once 'Message.php';
include_once 'database.php';
$db = new Database();
if (isset($_POST['message'])){
$text = $_POST['message'];
$message = new Message($text);
$db->createMessage($message);
} else {
    //pour renvoyer code http
    http_response_code(400);
    header('Content-Type:text/plain');
    echo 'erreur';
}

$db->readMessagesList();
$decode=json_decode($db->readMessagesList());
foreach($decode as $d){
    echo '<p>'.$d->date. ' : '.$d->text.'</p>';
}