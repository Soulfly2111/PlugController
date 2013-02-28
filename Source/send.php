<?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('plug-controller.db');
    }
}

$db = new MyDB();


// ./send 11111 1 1 -->> schaltet die erste Dose an.555
// ./send 11111 1 0 -->> schaltet die erste Dose aus.444

$id = $_POST["id"];


$results = $db->query("SELECT groupCode, code FROM plugs where id = '$id'");
	while ($row = $results->fetchArray()) {						
		if($_POST["status"]=='on')
			$status = 1;
		else
			$status = 0;
		$groupCode = $row['groupCode'] ;
		$code = $row['code'];
		$output = `sudo /root/rcswitch-pi/send $groupCode $code  $status`;
		// $output = `sudo /root/rcswitch-pi/send 11111 1 1`;
		echo "<pre>$output</pre>";
		
			
	}
	
?>
