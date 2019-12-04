<?php
	$name = stripcslashes($_POST['name']);
	$emailAddr = stripcslashes($_POST['email']);
	$comment = stripcslashes($_POST['message']);

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$contactMessage =
	"<div>
	<p><strong>Name:</strong> $name <br />
	<strong>E-mail:</strong> $emailAddr <br />

	<p><strong>Message:</strong> $comment </p>

	<p><strong>Sending IP:</strong> $_SERVER[REMOTE_ADDR]<br />
	<strong>Sent via:</strong> $_SERVER[HTTP_HOST]</p>
	</div>";

	$response = (mail('jatinrao8630@gmail.com', $contactMessage, $headers) ) ? "success" : "failure" ;
	$output = json_encode(array("response" => $response));

	header('content-type: application/json; charset=utf-8');
	echo($output);

?>
