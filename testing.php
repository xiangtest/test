<?php
class Notification
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function message()
    {
        return $this->message;
    }
}

interface Notifier
{
    public function send($to);
}





class EmailNotifier implements Notifier
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send($to)
    {
        // Email Logic Here
        // Maybe using php 
        
    }
}

class SMSNotifier implements Notifier
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send($to)
    {
        // SMS Logic Here
    }
}
.
