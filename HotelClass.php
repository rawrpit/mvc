<?php

class Hotel {
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = <<<EOD
        $description
        EOD;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function render() {
        return '<div class="hotel">
                    <h2>' . $this->getName() . '</h2>
                    <p>' . $this->getDescription() . '</p>
                </div>';
    }
}

class HotelList {
    private $hotels = [];

    public function addHotel(Hotel $hotel) {
        $this->hotels[] = $hotel;
    }

    public function renderHotels() {
        $hotelListHTML = '';
        foreach ($this->hotels as $hotel) {
            $hotelListHTML .= $hotel->render();
        }
        return $hotelListHTML;
    }
}


?>
