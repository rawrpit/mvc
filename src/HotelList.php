<?php
namespace Arpit\Mvc;

class HotelList
{
    private $hotels = [];

    public function addHotel($hotel)
    {
        $this->hotels[] = $hotel;
    }

    public function renderHotels()
    {
        $html = "";
        foreach ($this->hotels as $hotel) {
            $html .= $hotel->getHtml();
        }
        return $html;
    }
}
