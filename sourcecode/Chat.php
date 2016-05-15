<?php

class Chat{
    private $sender;
    private $receiver;
    private $message;

    public function sendMessage(User $sender, User $receiver, Message $message)
    {
        return $sender->username." send messages to ".$receiver->username. " and the messages is ".$message->message;
    }
}
