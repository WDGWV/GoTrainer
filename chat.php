<?php

$chat = array(
        // user    // text          // rank // lat  // lon
        ["WDGWV", "Hello welcome", "admin", "lat", "lon"],
        ["Carloooooo", "Hello welcome", "admin", "lat", "lon"],
        ["WDGWV", "Hey Carloooooo", "admin", "lat", "lon"],
        ["GUESTY", "Hey Trainers", "guest", "lat", "lon"],
        ["MODER", "Hey Trainers", "moderator", "lat", "lon"],
        ["VIP", "Hey Trainers", "vip", "lat", "lon"],
        ["GUESTY", "Hey Trainers", "guest", "lat", "lon"]
);

file_put_contents('chat.json', json_encode($chat));