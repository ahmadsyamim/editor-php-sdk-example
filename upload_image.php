<?php

require __DIR__ . '/vendor/froala/wysiwyg-editor-php-sdk/lib/FroalaEditor.php';

try {
  $response = FroalaEditor_Image::upload(dirname($_SERVER['REQUEST_URI']).'/uploads/');
  echo stripslashes(json_encode($response));

} catch (Exception $e) {

  echo $e->getMessage();
  http_response_code(404);
}