<?php

$result = dbConnect("localhost", "root", "usbw", "tyox");
$conn = $result[0];
$connSucceed = $result[1];

// if we didnt connect, exit
if (!$connSucceed)
    exit;

// or else...
$nShirtsToLoad = 3;
$shirts = [];

$page = $_GET["nPage"]; // which page is the user in
$limit = 3;    // number of shirts to load per page
$offset = ($page - 1) * $limit; // offset for the sql statement

$sql= "select * from shirt limit ".$limit." offset ".$offset.";";
$result = $conn->query($sql);

// in case we got some values, we read them and print info on screen
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc())
        $shirts[] = $row;

} else {
    echo "No results!";
    exit;
}

// load the articles into the gallery
foreach ($shirts as $s) {
    generateShirtArticle($s);
}

dbDisconnect($conn);

?>