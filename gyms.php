<?php

$data = array(
		// naam      //subtitel  // lat       //lon
	    ["Kittycat", "subtitle", "55.661099", "12.56219"],
        ["Kijkduin", "x", "52.069434", "4.221751"],
        ["Moskee schalkwijk", "schalkwijk", "52.359734", "4.664674"],
        ["Ontmoetinskerk", "schalkwijk", "52.363306", "4.648472"],
        ["Zandloper", "x", "52.35189", "4.653634"],
        ["Fisketorvet", "x", "55.662162", "12.561456"],
        ["Belasting Paradijs", "schalkwijk", "52.36375", "4.65247"],
        ["Bibliotheek", "schalkwijk", "52.355655", "4.655766"],
        ["Busstation", "schalkwijk", "52.360536", "4.656775"],
        ["Colorful table", "schalkwijk", "52.357176", "4.645268"],
        ["Helpende Hand", "Spaarne gasthuis (lok. zuid)", "52.366551", "4.651090"],
        ["Iron Sculptures", "Schalkwijk", "52.357382", "4.659879"],
        ["Kompas steen","schalkwijk","52.357045","4.648226"]
);


/*
Translator for swift.
*/
$JSON = array();
for ($i=0; $i<sizeof($data); $i++) {
	$JSON[] = array(
		'name' => $data[$i][0],
		'subtitle' => $data[$i][1],
		'latitude' => doubleval($data[$i][2]),
		'longitude' => doubleval($data[$i][3]),
	);
}
file_put_contents('gyms.json', json_encode($JSON));