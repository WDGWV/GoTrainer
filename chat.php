<?php

$chat = array(
        // user    // text          // rank // lat  // lon
        array(
        	'user' => "WDGWV",
        	'message' => "Hello welcome",
        	'status' => "admin",
                'team' => 'instinct',
        	'latitude' => 0.0,
        	'longitude' => 0.0
        ),
        array(
        	'user' => "Carloooooo",
        	'message' => "Hello welcome",
        	'status' => "admin",
                'team' => 'instinct',
        	'latitude' => 52.359734,
        	'longitude' => 4.664674
        ),
        array(
                'user' => "MalformedUser",
                'message' => "Hello welcome",
                'team' => 'valor',
                'status' => "KIP",
                'latitude' => "EW",
                'longitude' => "WE"
        ),
        array(
                'user' => "MalformedUser1",
                'message' => "Hello welcome",
                'team' => 'mystic',
                'status' => "KIP",
                'latitude' => "EW",
                'longitude' => "WE"
        ),
);

file_put_contents('chat.json', json_encode($chat));