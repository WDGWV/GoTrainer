<?php

$chat = array(
        // user    // text          // rank // lat  // lon
        // array(
        	'user' => "WDGWV",
        	'message' => "Hello welcome",
        	'status' => "admin",
        	'latitude' => "lat",
        	'longitude' => "lon"
        // ),
        // array(
        // 	'user' => "Carloooooo",
        // 	'message' => "Hello welcome",
        // 	'status' => "admin",
        // 	'latitude' => "lat",
        // 	'longitude' => "lon"
        // ),
        // 'id1' => array("Carloooooo", "Hello welcome", "admin", "lat", "lon"),
        // 'id2' => array("WDGWV", "Hey Carloooooo", "admin", "lat", "lon"),
        // 'id3' => array("GUESTY", "Hey Trainers", "guest", "lat", "lon"),
        // 'id4' => array("MODER", "Hey Trainers", "moderator", "lat", "lon"),
        // 'id5' => array("VIP", "Hey Trainers", "vip", "lat", "lon"),
        // 'id6' => array("GUESTY", "Hey Trainers", "guest", "lat", "lon"),
);

file_put_contents('chat.json', json_encode($chat));