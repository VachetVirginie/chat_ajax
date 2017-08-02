<?php
include_once 'Message.php';
include_once 'database.php';
$db = new Database();
$db->readMessagesList();
