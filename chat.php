<?php

$chat = array(
        // user    // text          // rank // lat  // lon
        array("WDGWV", "Hello welcome", "admin", "lat", "lon"),
        array("Carloooooo", "Hello welcome", "admin", "lat", "lon"),
        array("WDGWV", "Hey Carloooooo", "admin", "lat", "lon"),
        array("GUESTY", "Hey Trainers", "guest", "lat", "lon"),
        array("MODER", "Hey Trainers", "moderator", "lat", "lon"),
        array("VIP", "Hey Trainers", "vip", "lat", "lon"),
        array("GUESTY", "Hey Trainers", "guest", "lat", "lon"),
);

file_put_contents('chat.json', json_encode($chat));