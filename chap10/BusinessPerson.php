<?php
require_once 'Person5.php';

class BusinessPerson extends Person {
  public function work() {
    print "<p>{$this->lastName}{$this->firstName}は働いています。</p>";
  }
}