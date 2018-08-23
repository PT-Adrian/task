<?php
class view {
    public $action;
    public function __construct($action)
    {
    $this->action=$action;
    include('block.php');
    }
    public function DATA(){

    return $this->action['id'];
    }
}

