<?php

class User {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  final public function getName() {
    return $this->name;
  }
}

class Admin extends User {
  // ...
}

$admin = new Admin('Eduardo');
echo $admin->getName(); // Eduardo