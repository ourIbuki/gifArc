<?php
$target_dir = "gifs/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
  echo "File uploaded!";
} else {
  echo "Error uploading file";
}
?>
