<?php
require_once 'BusinessPerson.php';

class EliteBusinessPerson extends BusinessPerson {
    public function work() {
        print "{$this->lastName}{$this->firstName}はバリバリ働いています。";
    }
}