<?php

$result_list = array();

$results_per_page = 4;
global $mysqli;

$query = "SELECT * FROM myband_articles ORDER BY id DESC";
$result = mysqli_query($mysqli,$query) or die ('Error querying');
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);



$result = $mysqli->query($query);

while ($item = $result->fetch_assoc()) {
    $result_list[] = $item;
}