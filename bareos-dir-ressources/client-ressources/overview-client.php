<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
//include'job-template.php';

// Variables related to Job directives declaration
$client_name = $_POST["client_name"];
$client_description = $_POST["client_description"];
$client_address = $_POST["client_address"];

// Command that transfers the generated file to
$cp_command = <<<EOF
sudo scp $(ls -t | head -1) mohamed@192.168.178.186:/home/mohamed/Downloads
EOF;

// Generate random password
function getRandomPassword($length=50, $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ0123456789/+&"){
    return substr(str_shuffle($chars),0,$length);
}

$client_password = getRandomPassword($length=50, $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ0123456789/+&");

if(empty($client_name) || empty($client_address)) {
  echo "Bitte füllen Sie folgende Felder aus:";
  if(empty($client_name)){
    echo "<div style ='font:13px/21px Courier,tahoma,sans-serif;color:#ff0000'>Client > Name</div>";
  }

  if (empty($client_address)) {
    echo "<div style ='font:13px/21px Courier,tahoma,sans-serif;color:#ff0000'>Client > Address</div>";
  }

  ?><br><?php
  ?><button onclick="history.go(-1);">Zurück</button><?php

}

else
{

   $file = fopen("$client_name.conf", 'w+'); //Open your .txt file

   // Job template
   $job_template = <<<EOF
   Client {
      Ńame = $client_name
      Description = $client_description
      Address = $client_address
      Password = $client_password
    }
   EOF;


   fwrite($file , $job_template);
   fclose($file);
   shell_exec($cp_command);
   echo "Job created successfully!";

}

?>


</html>
