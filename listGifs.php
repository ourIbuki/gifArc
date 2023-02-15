<?php
header("Content-Type: application/json");

$directory = "gifs/";

$files = array_slice(scandir($directory), 2);
$gifs = array();

foreach ($files as $file) {
  if (pathinfo($file, PATHINFO_EXTENSION) === "gif") {
    array_push($gifs, $directory . $file);
  }
}

echo json_encode($gifs);