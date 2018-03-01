<?
use App\Hotel

$hotel = new Hotel();

$hotel->addNewRoom(1);
$hotel->addNewRoom(3);
$hotel->addNewRoom(2);

$hotel->addNewGuest("Harry");
$hotel->addNewGuest("Bill");
$hotel->addNewGuest("John");


$hotel->settleGuest(0, 0);
$hotel->settleGuest(2, 1);
$hotel->settleGuest(2, 2);