<?php
	
	$data = array (
		'appkey' => 'BC-171d6106d4294fffa7c2529058f9f085',
		'channel' => 'demo_channel',
		'content' => 'Hello, I am PHP'
	);
	
	$data = http_build_query($data);
	
	$opts = array (
		'http' => array (
			'method' => 'POST',
			'header'=> "Content-type: application/json" . "Content-Length: " . strlen($data) . "rn",
			'content' => $data
		)
	);
	
	$context = stream_context_create($opts);
	
	//push
	$html = file_get_contents('http://goeasy.io/goeasy/publish', false, $context);
	
	echo $html;
?>
