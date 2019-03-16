<?php
require 'phar://cloudconvert-php.phar/vendor/autoload.php';
use \CloudConvert\Api;
$api = new Api("rPpkLqwUFy1_PXRrtOubNNZpRVoVHJavMw7MfBai5yVH6yZa9b_Ig7Xc4uuGF5g14kqZhTbiuNx7-6Xtnbx-4w");
 
$api->convert([
    "inputformat" => "pdf",
    "outputformat" => "docx",
    "input" => "upload",
    "file" => fopen('sample.pdf', 'r'),
])
->wait()
->download();
?>
