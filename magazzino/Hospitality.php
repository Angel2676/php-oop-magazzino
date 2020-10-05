<?php

require_once 'Eventi.php';

class Hospitality extends Events{
    public $hospitalityRate;
    public function __construct($_eventName, $_eventDate, $_hospitalityRate, $_buffet = 20){
        parent:: __construct($_eventName, $_eventDate);
        $this->hospitalityRate = $_hospitalityRate + $_buffet;
    }

    public function newPrice ($_priceHosp) {
        if (empty($this->hospitalityRate)) {
            echo "non hai selezionato l'Area Hospitality";
        }
    return $this->hospitalityRate + $_priceHosp;
    }


}
