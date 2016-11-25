<?php
require_once("members.php");
require_once("players.php");


//$member = new Members(100,"Petar Petrovic", 33);

// $player = new Players();
//
// $member->name="Petar Petrovic";
// $member->age=33;
// $member->id=100;
//
//var_dump($member);


// $player->name="Petar Petrovic";
// $player->age=33;
// $player->id=100;
// $player->teamId=77;
//

$player = new Players(100, "asbdkab", 55, 88);
$a = array();
$a[] = new Players(1, "bane", 44, 123);
$a[] = new Players(2, "Djole", 45, 123);
$a[] = new Players(2, "Oko", 45, 123);

var_dump($a);

$teams->getById(123);

$team = new Teams("Levaci");
$player = new Players(1, "bane", 44, 123);
$team->addNewPlayer( $player );

var_dump($a[2]->name);
