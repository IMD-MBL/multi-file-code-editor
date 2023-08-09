<?php
if (isset($_GET['file'])) {
  $fileName = $_GET['file'];
  $filePath = 'path/to/files/' . $fileName;
  
  if (file_exists($filePath)) {
    echo file_get_contents($filePath);
  } else {
    echo 'File not found.';
  }
} else {
  echo 'Invalid request.';
}
?>
