<?php

// imports

require_once("user.php");
require_once("admin.php");
require_once("guest.php");


abstract class Base {
  protected $name;
  private function getClassName() {
    return get_called_class();
  }
  public function login() {
    return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
  }
}

$guest = new Guest();
echo $guest->login();

$user = new User("usuario");
echo $user->login();

$admin = new Admin("Administrador");
echo $admin->login();