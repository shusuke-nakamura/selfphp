<?php
class Person {
    public $firstName;
    public $lastName;

    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct() {
        print '<p>'.__CLASS__.'オブジェクトが破棄されました。</p>';
    }

    public function show() {
        print "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
    }
}