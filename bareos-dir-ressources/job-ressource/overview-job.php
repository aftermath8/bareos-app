<?php

require_once('job-template.php');
$job_name = $_POST["job_name"];
$job_client = $_POST["job_client"];

if(empty($job_name) || empty($job_client)) {
  echo "Bitte füllen Sie alle Felder aus!";
}
else
{
AI_JobTemplate($job_name, $job_client);
$fkt = AI_JobTemplate($job_name, $job_client);
$test = file_get_contents($fkt);
$alo ='test.conf';
file_put_contents($alo, $test);
   //$type = gettype($function);
   //$file = 'test.conf';
   //file_put_contents($file, $type);
   //$string = file_get_contents($function_to_string);
   //print $string;
   //$ai_generated_file = fopen("test.conf", "w") or die ("unable to open file");
   //fwrite($ai_generated_file, $function);
   //fclose($ai_generated_file);


}



//$test = 'Name = . "$job_name . ';
//$file = 'yala.txt';
//file_put_contents($file, $test);
//$ai_generated_file = fopen("test.conf", "w") or die ("unable to open file");
//$functionn = AI_JobTemplate($job_name, $job_client);
//$function = strval($functionn);
//fwrite($ai_generated_file, $function);
//fclose($ai_generated_file);
//echo $function;

//$ai_generated_file = fopen("test.conf", "w") or die ("unable to open file");
//$ai_content = AI_JobTemplate($job_name, $job_client);
//$data_ai_content = file_get_contents($ai_content);
//$ai_gen_file = file_get_contents(AI_JobTemplate($job_name, $job_client), true);
//$ai_content = $job_name;
//fwrite($ai_generated_file, $ai_gen_file);
//fclose($ai_generated_file);

//$file = file_get_contents('./job-template.php', true);

//echo $file;
?>
