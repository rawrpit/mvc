<?php
require __DIR__ . '/vendor/autoload.php';

use Arpit\Mvc\HotelClass;
use Arpit\Mvc\HotelList;

$hotelList = new HotelList();

$hotelList->addHotel(new HotelClass("Venetian Resort Hotel", "Cute and butiful an richhyyyyyyyyyyyyy.", "images/hotel1.png"));
$hotelList->addHotel(new HotelClass("Caesars Palace", "Crazy vibes, chill idk blablabla eypensive.", "images/hotel2.jpg"));
$hotelList->addHotel(new HotelClass("Bellagio", "Besteeeee! Fsdofjsssssssssgows.", "images/hotel3.jpg"));

$template = file_get_contents(__DIR__ . "/template.html");

$hotelListHTML = $hotelList->renderHotels();

$output = str_replace("{{HOTEL_LIST}}", $hotelListHTML, $template);

echo $output;
