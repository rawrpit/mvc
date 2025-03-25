<?php
require __DIR__ . '/vendor/autoload.php';

use Arpit\Mvc\HotelClass;
use Arpit\Mvc\HotelList;

$hotelList = new HotelList();

$hotelList->addHotel(new HotelClass("Venetian Resort Hotel", "Cute and luxurious hotel with Venetian theme.", "images/hotel1.png"));
$hotelList->addHotel(new HotelClass("Caesars Palace", "Crazy vibes, entertainment, and opulence.", "images/hotel2.jpg"));
$hotelList->addHotel(new HotelClass("Bellagio", "Besteeeee! Famous for its fountain shows.", "images/hotel3.jpg"));

$template = file_get_contents(__DIR__ . "/template.html");

$hotelListHTML = $hotelList->renderHotels();

$output = str_replace("{{HOTEL_LIST}}", $hotelListHTML, $template);

echo $output;
