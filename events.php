<?php

$events = array(
	array(
		'title' => "Evee Community day 1",
		'message' => "blah",
		'begin' => mktime("11-08-2018 11:00"),
		'end' => mktime("11-08-2018 14:00"),
		'image' => "imageURL"
	),
    array(
		'title' => "Evee Community day 2",
		'message' => "blah",
		'begin' => mktime("12-08-2018 11:00"),
		'end' => mktime("12-08-2018 14:00"),
		'image' => "imageURL"
    ),
    array(
		'title' => "Niantic did something",
		'message' => "blah",
		'begin' => mktime("12-12-2018 11:00"),
		'end' => mktime("12-12-2018 14:00"),
		'image' => "imageURL"
    )
);

file_put_contents('events.json', json_encode($events));