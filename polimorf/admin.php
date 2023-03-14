<?php

// base class

require_once("base.php");

class Admin extends Base {
  public function __construct($name) {
    $this->name = $name;
  }
}