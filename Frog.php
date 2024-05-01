<?php
require_once 'animal.php';
class frog extends animal
{
    public $jump;
    public  function jump() {
        return $this -> jump = "hop hop";
    }
}

?>