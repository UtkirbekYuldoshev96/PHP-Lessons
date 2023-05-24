<?php

class AviaReys
{
    private $name;
    private $firtName;
    private $age;
    private $ticket;
    private $ticket_order;

    public function __construct($name, $firtName, $age, $ticket, $ticket_order){
        $this->$name = $name;
    }

}

?>