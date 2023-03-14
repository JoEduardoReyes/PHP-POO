<?php

// base class

require_once("base.php");

class User extends Base {
  public function __construct($name) {
    $this->name = $name;
  }
}