<?php

$chat = array(
        // user    // text          // rank // lat  // lon
        array(
        	'user' => "WDGWV",
        	'message' => "Hello welcome",
        	'status' => "admin",
        	'latitude' => 0.0,
        	'longitude' => 0.0
        ),
        array(
        	'user' => "Carloooooo",
        	'message' => "Hello welcome",
        	'status' => "admin",
        	'latitude' => 52.359734,
        	'longitude' => 4.664674
        ),

        // 'id3' => array("GUESTY", "Hey Trainers", "guest", "lat", "lon"),
        // 'id4' => array("MODER", "Hey Trainers", "moderator", "lat", "lon"),
        // 'id5' => array("VIP", "Hey Trainers", "vip", "lat", "lon"),
        // 'id6' => array("GUESTY", "Hey Trainers", "guest", "lat", "lon"),
);

file_put_contents('chat.json', json_encode($chat));