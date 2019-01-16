<?php

require __DIR__ . '/vendor/froala/wysiwyg-editor-php-sdk/lib/FroalaEditor.php';

$response = FroalaEditor_Image::getList(dirname($_SERVER['REQUEST_URI']).'/uploads/');

echo stripslashes(json_encode($response));
?>