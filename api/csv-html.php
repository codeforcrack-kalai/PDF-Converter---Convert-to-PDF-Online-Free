
<?php
// set post fieldshttp://online.verypdf.com/api/?apikey=XXXX
//require 'phar://cloudconvert-php.phar/vendor/autoload.php';
//use \CloudConvert\Api;


$key=$_REQUEST['key'];

$sfile=$_REQUEST['sfile'];

$tfile=$_REQUEST['tfile'];
$purl=$_REQUEST['purl'];

$file2="http://techmyntra.co.in/demo/pdfapp/Book1.csv";


if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "../uploads/".$_FILES['userImage']['name'];
$filepath="uploads/".$_FILES['userImage']['name'];
$filename=$_FILES['userImage']['name'];
move_uploaded_file($sourcePath,$targetPath);

$pf = preg_replace('/\s+/', '', $filepath);

$file='http://localhost/techmyntra/pdfAPP/'.$filepath;
}
}

if($key=='Gd243vdfgdfgfdgfd55554GFFDGFDGSGSDsaDSF' && !empty($file) )
{
	//gettok($file);
	
date_default_timezone_set('Asia/Kolkata');
$date= date('d-m-Y H:i');

$purl=getprocessid();


include "../connection.php";
$qry="INSERT INTO `convertion-logs` (`id`, `input`, `output`, `c_from`, `c_to`, `type`, `date`) 
VALUES (NULL, '$file', '$purl', '$sfile', '$tfile', 'conver', '$date');";

$res=mysqli_query($con,$qry);
if($res)
{
 //setconversion($file2,$purl);

//$s=getprocessid();
$arr = array('p' =>$purl,'file'=>$file2);

echo json_encode($arr);


//header('Location: '.'word-to-pdf-download.php?re=.'$purl);

}
else
{
	echo "sorry Try Again";
}







}





function setconversion($file2,$purl)
{
$post = [
    'input' => 'download',
    'file' => $file2,
    'outputformat'   => 'doc',  


  
 
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
//print_r($json);

$url=$json['url'];
//$message=$json['message'];


return $url;
}


function getprocessid()
{
$post = [
    'apikey' => 'vcLhis-exdcoGmnwhSmVzMHl50ytw0MeUHfKE9jKeA8gm2uNLecsws8rGxRWQ_8kDUcVAhLPfFtkhxgvMWLriw',
    'inputformat' => 'csv',
    'outputformat'   => 'html',  


  
 
];

$ch = curl_init('https://api.cloudconvert.com/process');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
$json = json_decode($response, true);
//print_r($json);

return $url=$json['url'];
//$id=$json['id'];




}






?>







