<?php

require("User.php");
require("Messages.php");
require("Chat.php");
require("Session.php");

$yabes = new User("Yabes Wirawan", "12345");
$farhad = new User("Farhad", "12345");

$session = new Session();
echo $session->login($yabes);
echo " ";

// echo $session->login($farhad);
echo " ";

echo $session->firstTimeLogin($yabes);
// $halo = new Message($yabes, "Halo ");
// $halojuga = new Message($farhad, "Halo juga ");
//
// $chatroom = new Chat();
// echo $chatroom->sendMessage($yabes,$farhad,$halo);
// echo $chatroom->sendMessage($farhad,$yabes,$halojuga);
