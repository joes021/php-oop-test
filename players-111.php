<?php

require_once("members.php");

class Players extends Members{
  function __construct($id, $name, $age, $teamId){
    $this->teamId=$teamId;
    parent::__construct($id, $name, $age);
  }

  public $teamId;

}
