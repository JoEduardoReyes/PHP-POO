<?php

require_once "person.php";
require_once "admin.php";
require_once "user.php";

$user = new User;
$user->type = new Admin;

echo $user->type->greet(). "\n";