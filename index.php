<?php
   class Room {
      /* Room variables */
      var $room_id;
      var $room_price;
      var $room_floor;
      /* Room functions construct */
      function __construct($room_id, $room_price, $room_floor) {
        $this->room_id = $room_id;
        $this->room_price = $room_price;
        $this->room_floor = $room_floor;
      }
      function get_id() {
        return $this->room_id;
      }
      function get_price() {
        return $this->room_price;
      }
      function get_floor() {
        return $this->room_floor;
      }
   }

function printRoom($room){

  echo "room id: " .$room->get_id()."<br>".
  "room price: ".$room->get_price()."<br>".
  "room floor: ".$room->get_floor()."<br><br>";

}

$stanza1 = new Room(01,80,01);
$stanza2 = new Room(02,100,01);

printRoom($stanza1);
printRoom($stanza2);

?>