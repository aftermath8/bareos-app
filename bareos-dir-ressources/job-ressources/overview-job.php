<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

include'job-template.php';
$client_name = $_POST["client_name"];
$client_description = $_POST["client_description"];
$client_address = $_POST["client_address"];

$cp_command = <<<EOF
mkdir test
EOF;

function getRandomPassword($length=12, $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ0123456789/+&"){
    return substr(str_shuffle($chars),0,$length);
}

$client_password = getRandomPassword($length=50, $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ0123456789/+&");

if(empty($client_name) || empty($client_address)) {
  echo "Bitte füllen Sie alle Felder aus!";
}

else
{

   $file = fopen("$client_name.conf", 'w+'); //Open your .txt file


   $job_template = <<<EOF
   Job {
      Ńame = $client_name
      Description = $client_description
      Address = $client_address
      Password = $client_password
    }
   EOF;


   fwrite($file , $job_template);
   fclose($file);
   exec($cp_command);
   echo "Job created successfully!";

}

?>


</html>
