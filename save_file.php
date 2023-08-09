<?php
if (isset($_POST['file']) && isset($_POST['content'])) {
  $fileName = $_POST['file'];
  $content = $_POST['content'];
  $filePath = 'path/to/files/' . $fileName;
  
  if (file_put_contents($filePath, $content) !== false) {
    echo 'File saved successfully.';
  } else {
    echo 'Error saving file.';
  }
} else {
  echo 'Invalid request.';
}
?>
