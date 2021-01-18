<?php
  function AI_JobTemplate($job_name, $job_client){
      echo "Job {";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Name = ".$job_name."";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Client = ".$job_client."";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Type =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Level =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Schedule =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Storage =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Messages = Standard";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Priority = 15";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Allow Mixed Priority = yes";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Write Bootstrap = \"/var/lib/bareos/%c.bsr\"";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Pool =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Full Backup Pool =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Incremental Backup Pool =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Accurate = no";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Always Incremental =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Always Incremental Job Retention =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Always Incremental Keep Number =";
      echo "<br>";
      echo str_repeat('&nbsp;', 5); echo "Always Incremental Max Full Age =";
      echo "<br>";
      echo "}";


}

?>
