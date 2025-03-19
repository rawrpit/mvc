<?php
include 'HotelClass.php';

$hotelList = new HotelList();

$hotelList->addHotel(new Hotel("Hotel 1", "blep blop peep.sigwofgugggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg"));
$hotelList->addHotel(new Hotel("Hotel 2", "yom yom good food"));
$hotelList->addHotel(new Hotel("Hotel 3", "cozy cool crazy"));

$template = file_get_contents("template.html");

$hotelListHTML = $hotelList->renderHotels();
$output = str_replace("{{HOTEL_LIST}}", $hotelListHTML, $template);

echo $output;
?>
