<?php

$events = array(
	array(
		'title' => "Evee Community day 1",
		'message' => "blah",
		'begin' => date('c', mktime("11-08-2018 11:00")),
		'end' => date('c', mktime("11-08-2018 14:00")),
		'image' => "imageURL"
	),
    array(
		'title' => "Evee Community day 2",
		'message' => "blah",
		'begin' => date('c', mktime("12-08-2018 11:00")),
		'end' => date('c', mktime("12-08-2018 14:00")),
		'image' => "imageURL"
    ),
    array(
		'title' => "Niantic did something",
		'message' => "blah",
		'begin' => date('c', mktime("12-12-2018 11:00")),
		'end' => date('c', mktime("12-12-2018 14:00")),
		'image' => "imageURL"
    )
);

file_put_contents('events.json', json_encode($events));
