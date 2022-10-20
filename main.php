<?php
require 'vendor/autoload.php';
use App\User;
$person=new User("messie","messie@gmail.com","admin");
var_dump($person->to_string());