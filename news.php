<?php

$news = array(
	array(
		'title' => "Evee",
		'message' => "blah",
		'begin' => mktime("11-08-2018 11:00"),
		'end' => mktime("11-08-2018 14:00"),
		'image' => "imageURL"
	),
    array(
		'title' => "Evee",
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

file_put_contents('news.json', json_encode($news));