<?php

class Message{
    private $id;
    private $message;

    public function __construct(User $user, $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

    public function __set($property, $value)
    {
        $this->property = $value;
    }

    public function __get($value)
    {
        return $this->$value;
    }
}
