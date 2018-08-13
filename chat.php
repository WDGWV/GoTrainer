<?php

$chat = array(
        // user    // text          // rank // lat  // lon
        array(
        	'user' => "WDGWV",
        	'message' => "Hello welcome",
        	'status' => "admin",
                'privacy' => 'global',
                'team' => 'instinct',
                'latitude' => 52.359734,
                'longitude' => 4.664674
        ),
        array(
        	'user' => "Carloooooo",
        	'message' => "Hello welcome",
        	'status' => "admin",
                'privacy' => 'global',
                'team' => 'instinct',
        	'latitude' => 52.359734,
        	'longitude' => 4.664674
        ),
        array(
                'user' => "MalformedUser",
                'message' => "valor number one!",
                'team' => 'valor',
                'status' => "KIP",
                'privacy' => 'global',
                'latitude' => "EW",
                'longitude' => "WE"
        ),
        array(
                'user' => "MalformedUser1",
                'message' => "mystic number one!",
                'team' => 'mystic',
                'status' => "KIP",
                'privacy' => 'global',
                'latitude' => "EW",
                'longitude' => "WE"
        ),
        array(
                'user' => "GOD",
                'message' => "Instinct number one!",
                'team' => 'instinct',
                'status' => "guest",
                'privacy' => 'global',
                'latitude' => 52.359734,
                'longitude' => 4.664674
        ),
        array(
                'user' => "WDGWV",
                'message' => "Alleen lokale mensen kunnen dit zien :D",
                'status' => "admin",
                'privacy' => 'global',
                'team' => 'local',
                'latitude' => 52.359734,
                'longitude' => 4.664674
        ),
);

file_put_contents('chat.json', json_encode($chat));