<?php

class Events{
    public $eventName;
    public $eventDate;
    public $eventLocation;
    public $eventPrice;


    public function __construct($_eventName, $_eventDate){
        $this->eventName = $_eventName;
        $this->eventDate = $_eventDate;
    }
    public function getPrice($_commission){
        if (empty($this->eventPrice)) {
            die('nessun dato selezionato');
        }
    return $this->eventPrice + $_commission;
    }


}
