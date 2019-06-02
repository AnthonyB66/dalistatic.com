<?php 
$fullPostData = file_get_contents('php://input');
#$data = json_decode($fullPostData);
#var_dump($data);
try
{
  $payload = json_decode($fullPostData);
}
catch(Exception $e)
{
  exit(0);
}

//log the request
file_put_contents('logs/github.txt', print_r($payload, TRUE), FILE_APPEND);

if ($payload->ref === 'refs/heads/master')
{
  echo "Mise en production\n";
  // path to your site deployment script
 $output = system("./build.sh");

 # var_dump($output);
}
