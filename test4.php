<?php
function getprocessid()
{
	$file2="http://techmyntra.co.in/demo/pdfapp/sample.pdf";
$post = [
   'input' => 'download',
    'file' => $file2,
    'outputformat'   => 'docx',  


  
 
];

$ch = curl_init('//host123d1w0.cloudconvert.com/process/iPx1eqgB0IaH8J7lhdbF');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
$json = json_decode($response, true);
print_r($json);

$url=$json['error'];
//$id=$json['id'];


//return $url;
}


getprocessid();
$file2="http://techmyntra.co.in/demo/pdfapp/sample.pdf";
$purl="//host123d1w0.cloudconvert.com/process/rXbFERJ8xGU5pnLHitMv";
 //setconversion($file2,$purl);

function setconversion($file2,$purl)
{
$post = [
    'input' => 'download',
    'file' => $file2,
    'outputformat'   => 'docx',  


  
 
];

$ch = curl_init($purl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
$json = json_decode($response, true);
print_r($json);

//$url=$json['url'];
//$message=$json['message'];


//return $url;
}

?>
