<?php

$events = array(
	array("Evee", "blah", "11-08-2018", "11:00", "13:00", "imageURL"),
    array("Evee", "blah", "12-08-2018", "11:00", "13:00", "imageURL"),
    array("Niantic did something.", "Description", "12-12-2018", "12:00", "12:00", "imageURL")
);

file_put_contents('events.json', json_encode($events));