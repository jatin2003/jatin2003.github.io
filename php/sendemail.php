<?php

function IsInjected($str)

{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
             
    $inject = join('|', $injections);

    $inject = "/$inject/i";
 
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}
if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>

	<p><strong>Sending IP:</strong> $_SERVER[REMOTE_ADDR]<br />
	<strong>Sent via:</strong> $_SERVER[HTTP_HOST]</p>
	</div>";

	$response = (mail('jatinrao8630@gmail.com', $contactMessage, $headers) ) ? "success" : "failure" ;
	$output = json_encode(array("response" => $response));

	header('content-type: application/json; charset=utf-8');
	echo($output);

?>
